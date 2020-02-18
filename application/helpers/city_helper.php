<?php 
	function getCityLatLong($CityId){
		$ci=&get_instance();
        $ci->load->model('CitiesModel');
        $data=$ci->CitiesModel->fetcCityLatLong($CityId);
        return $data['longitude'].','.$data['latitude'];
	}

	function getCityState($CityId){
		$ci=&get_instance();
        $ci->load->model('CitiesModel');
        $data=$ci->CitiesModel->getCityStatebyCityId($CityId);

        return $data['city'].", ".$data['state'];
	}

?>