<?php

// application/models/UserModel.class.php

class CampaignModel extends Model{


    public function getCampaigns(){

        $sql = "select * from $this->table";

        $Campaigns = $this->db->getAll($sql);

        return $Campaigns;

    }

}