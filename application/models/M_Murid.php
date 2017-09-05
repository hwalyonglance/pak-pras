<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Murid extends CI_Model {
	function add($data){
		$id = $this->db->select_max('id')->get('f1')->result_array()[0]['id']+1;
		$data[5]['id'] = $data[4]['id'] = $data[3]['id'] = $data[2]['id'] = $data[1]['id'] = $id;
		$this->db->insert('f1', $data[1]);
		$this->db->insert('f2', $data[2]);
		$this->db->insert('f3', $data[3]);
		$this->db->insert('f4', $data[4]);
		$this->db->insert('f5', $data[5]);
		redirect('murid/calon/'.$id);
	}
	function get($id, $status){
		return [
			1 => $this->db->where([ 'id' => $id, 'status' => $status ])->get('f1')->result_array()[0],
			2 => $this->db->where([ 'id' => $id ])->get('f2')->result_array()[0],
			3 => $this->db->where([ 'id' => $id ])->get('f3')->result_array()[0],
			4 => $this->db->where([ 'id' => $id ])->get('f4')->result_array()[0],
			5 => $this->db->where([ 'id' => $id ])->get('f5')->result_array()[0]
		];
	}
	function update($data){
		$this->db->where('id', $data[1]['id'])->update('f1',$data[1]);
		$this->db->where('id', $data[1]['id'])->update('f2',$data[2]);
		$this->db->where('id', $data[1]['id'])->update('f3',$data[3]);
		$this->db->where('id', $data[1]['id'])->update('f4',$data[4]);
		$this->db->where('id', $data[1]['id'])->update('f5',$data[5]);
		if ($this->session->flashdata('from:su/')) {
			$this->session->set_flashdata('backto:su/', TRUE);
		}
		$this->session->set_flashdata('from:su/', TRUE);
		redirect('murid/calon/'.$data[1]['id']);
	}
	function delete($id){
		unlink(BASEPATH.'..\\uploads\\murid\\'.$this->db->select('foto')->where('id',$id)->get('f1')->result_array()[0]['foto']);
		$this->db->where('id', $id)->delete('f1');
		$this->db->where('id', $id)->delete('f2');
		$this->db->where('id', $id)->delete('f3');
		$this->db->where('id', $id)->delete('f4');
		$this->db->where('id', $id)->delete('f5');
		redirect('murid/calon');
	}
	function get_period($status){
		return $this->db->select('created_at')->where(['status' => $status])->get('f1')->result_array();
	}
}

/* End of file M_Pendaftaran.php */
/* Location: ./application/models/M_Pendaftaran.php */