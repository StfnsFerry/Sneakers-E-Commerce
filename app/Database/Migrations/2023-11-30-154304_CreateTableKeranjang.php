<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableKeranjang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_produk' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kurir' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlah_barang' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'total_transaksi' => [
                'type' => 'INT',
                'constraint' => 12,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_produk','produk','id');
        $this->forge->addForeignKey('id_user','users','id');
        $this->forge->createTable('keranjang');
    }

    public function down()
    {
        $this->forge->dropTable('keranjang', true);
    }
}
