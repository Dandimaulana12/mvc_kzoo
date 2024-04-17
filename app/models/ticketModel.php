<?php

class ticketModel{

    private $table = "tb_ticket";
    private $db;
    public function __construct(){
        $this->db = new database;
    }

    public function tambahtiket($data, $id){
        $query = "INSERT into tb_ticket
                    values
                  ('',:user_id, :regular_tiket, :platinum_tiket, :gold_tiket, :jumlah_tiket, :tanggal_book, :harga_tiket, 'proses')";

        $this->db->query($query);

        $this->db->bind('user_id', $id, PDO::PARAM_INT);
        $this->db->bind('regular_tiket', $data["hasil_regular"], PDO::PARAM_INT);
        $this->db->bind('platinum_tiket', $data["hasil_platinum"], PDO::PARAM_INT);
        $this->db->bind('gold_tiket', $data["hasil_gold"], PDO::PARAM_INT);
        $this->db->bind('jumlah_tiket', $data["jumlah_pengunjung"], PDO::PARAM_INT);
        $this->db->bind('tanggal_book', $data["tanggal"], PDO::PARAM_INT);
        $this->db->bind('harga_tiket', $data["total_harga"], PDO::PARAM_INT);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahhtiket($data, $id){
        $query = "UPDATE tb_ticket
                    set
                  (regular_tiket=:regular_tiket, platinum_tiket=:platinum_tiket, gold_tiket=:gold_tiket, jumlah_tiket=:jumlah_tiket, tanggal_book=:tanggal_book, harga_tiket=:harga_tiket where user_id=:user_id)";

        $this->db->query($query);

        $this->db->bind('user_id', $id, PDO::PARAM_INT);
        $this->db->bind('regular_tiket', $data["hasil_regular"], PDO::PARAM_INT);
        $this->db->bind('platinum_tiket', $data["hasil_platinum"], PDO::PARAM_INT);
        $this->db->bind('gold_tiket', $data["hasil_gold"], PDO::PARAM_INT);
        $this->db->bind('jumlah_tiket', $data["jumlah_pengunjung"], PDO::PARAM_INT);
        $this->db->bind('tanggal_book', $data["tanggal_book"], PDO::PARAM_INT);
        $this->db->bind('harga_tiket', $data["total_harga"], PDO::PARAM_INT);

        $this->execute();

        $this->db->execute();

        return $this->db->rowCount();
    }
}