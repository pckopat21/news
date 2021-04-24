<?php namespace App\Models\Admin;
use Codeigniter\Database\ConnectionInterface;

class Gorevyeri_model

{
    protected $db;
    public function __construct(ConnectionInterface &$db)
    {
        $this-> db =& $db;
        $this-> table = "gorev_yeri";//istediğini bu sanırım evet doğru.
    }
    public function c_one($where = array())//one dediği tek bir listelemedir
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getRow();
    }
    public function c_all($where = array())//burada ise hepsini listeleme
    {
        return $this-> db-> table($this-> table)-> where($where)-> get()-> getResult();//verilerin tamamı result
    }
    public function goreyyeri($where = array())
    {
        $builder = $this->db->table('gorev_yeri');
        $builder->select('*');
        $builder->where('gorev_yeri.gorevyeri_durum',"1");
        $builder->orderBy('gorev_yeri.gorevyeri_ad');
        $data = $builder->get()->getResult();
        return $data;
    }    public function add($data = array())
    {
        return $this-> db-> table($this-> table)-> insert($data);
    }
    public function update($where = array(),$data =array())
    {
        return $this-> db-> table($this-> table)->where($where)->update($data);
    }
    public function delete($where =array() )
    {
        return $this->db->table($this->table)->where($where)->delete();
    }
}

