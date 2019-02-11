<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct()
    {   
        parent::__construct();
        $this->load->model('m_cart');
    }

    public function index()
    {
        $this->load->view('front/v_cart');
    }
    
    function tambah()
    {
        $data_produk= array('id' => $this->input->post('id'),
                             'name' => $this->input->post('nama'),
                             'price' => $this->input->post('harga'),
                             'gambar' => $this->input->post('gambar'),
                             'qty' =>$this->input->post('qty')
                            );
        $this->cart->insert($data_produk);
        redirect('cart');
    }

    function hapus($rowid)
    {
        if ($rowid=="all")
            {
                $this->cart->destroy();
            }
        else
            {
                $data = array('rowid' => $rowid,
                              'qty' =>0);
                $this->cart->update($data);
            }
        redirect('cart');
    }

    function ubah_cart()
    {
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $gambar = $cart['gambar'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array('rowid' => $rowid,
                            'price' => $price,
                            'gambar' => $gambar,
                            'amount' => $amount,
                            'qty' => $qty);
            $this->cart->update($data);
        }
        redirect('cart');
    }

    public function proses_order()
    {
        //-------------------------Input data pelanggan--------------------------
        $data_pelanggan = array('nama' => $this->input->post('name'),
                            'email' => $this->input->post('email'),
                            'phone' => $this->input->post('phone'));
        $id_pelanggan = $this->m_cart->tambah_pelanggan($data_pelanggan);
        /*request order code*/
        function random($leng)  
        {  
         $kar = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';  
         $string = '';  
         for($i = 0; $i < $leng; $i++) {  
          $pos = rand(0, strlen($kar)-1);  
          $string .= $kar{$pos};  
         }  
         return $string;  
        }
        $orderCode = random(7); 
        //-------------------------Input data order------------------------------
        $data_order = array('tanggal' => date('Y-m-d'),
                            'id_cust' => $id_pelanggan,
                            'order_code' => $orderCode);
        $id_order = $this->m_cart->tambah_order($data_order);
        //-------------------------Input data detail order-----------------------       
        if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {
                        $data_detail = array('order_id' =>$id_order,
                                        'produk_id' => $item['id'],
                                        'qty' => $item['qty'],
                                        'harga' => $item['price']);         
                        $proses = $this->m_cart->tambah_detail_order($data_detail);
                    }
            }
        $data['cust'] = $data_pelanggan;
        $data['or'] = $data_order;
        $data['or_detail'] = $data_detail;
        //-------------------------Hapus shopping cart--------------------------        
        $this->cart->destroy();
        $this->load->view('front/v_invoice', $data);
        
    }

    public function in()
    {
        
    }
}
?>