<?php
class Main
{
    private $data;
    public function getData($params = array())
    {
        // getting content from API and converting to array from json
        $result = file_get_contents('https://api.coinstats.app/public/v1/coins?skip=0&limit=100&currency=INR');
        if ($result != null) {
            $result = json_decode($result, true);
            $result = $result['coins'];

            // getting the desired field in json only.
            $this->data = $this->getParticulars($result, $params);

            // return json data in a ajax callback
            return $this->data;
        } else {
            return false;
        }
    }

    private function getParticulars($coinInfo, $params = array())
    {
        $result = array();

        // separating finding params
        for ($i = 0; $i < count($params); $i++) {
            $input[$i + 1] = $params[$i];
        }

        // making array of params only
        foreach ($coinInfo as $key => $value) {
            $getArray = array(
                'id' => $key + 1,
                'name' => $value[$input[1]],
                'price' => $value[$input[2]]
            );
            array_push($result, $getArray);
        }

        // converting to json
        $result = json_encode($result);
        return $result;
    }
}
