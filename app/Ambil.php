

<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;
public class Ambil extends Model {

public function getAll($limit = 10, $offset = 0, $orders = array(), $where = array(), $like = array()) {
		$data = array();

		$this->db->start_cache();
		if (count($where) > 0) {
			$this->db->where($where);
		}
		if (count($like) > 0) {
			$this->db->like($like);
		}
		$this->db->stop_cache();
		
		$data['total_rows'] = $this->db->count_all_results($this->table_def);
		
		if (count($orders) > 0)
			foreach ($orders as $order => $direction)
				$this->db->order_by($order, $direction);

        if ($limit == 0) {
            $data['data'] = $this->db->get($this->table_def)->result();
        }
        else {
            $data['data'] = $this->db->get($this->table_def, $limit, $offset)->result();
        }

		$this->db->flush_cache();

		return $data;
	}
}
	?>