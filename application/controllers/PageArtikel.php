<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageArtikel extends CI_Controller {

	
	public function index()
	{
		//ambil data json dari file
		$content=file_get_contents("http://127.0.0.1:8000/api/artikel/");

		//mengubah standar encoding
		$content=utf8_encode($content);
	  
		//mengubah data json menjadi data array asosiatif
		$result=json_decode($content,true);

		$data=array('result'=>$result);

		$this->load->view('list_artikel',$data);

	}

	public function page_view($id){

		//ambil data json dari file
		$content=file_get_contents("http://127.0.0.1:8000/api/artikel/$id");

		//mengubah standar encoding
		$content=utf8_encode($content);
	  
		//mengubah data json menjadi data array asosiatif
		$result=json_decode($content,true);
		
		//looping data menggunakan foreach
		// foreach ($result as $value) {
		//  echo "AUTHOR : ".$value['author']."<br>";
		//  echo "TEXT : ".$value['text']."<br>";
		//  echo "TGL MASUK : ".$value['created_at']."<br>";
		//  echo "TGL UPDATE : ".$value['updated_at']."<br>";
		// }

		$data=array('id'=>$id,
		'author'=>$value['author'],
		'text'=>$value['text'],
		);
		// var_dump($data);
		// $this->load->view('page_view',$data);
	}
	public function page_edit($id){

	}
	public function update(){}
	public function delete(){}

	
}
