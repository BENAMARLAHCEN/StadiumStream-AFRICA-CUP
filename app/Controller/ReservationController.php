<?php
  namespace App\Controller;
  use App\Model\ReservationModel;
  class ReservationController  extends Controller  {

      function addreservation(){
             if($_SERVER["REQUEST_METHOD"] == "POST"){

                 $id_user= "1";     // we will take it from session !!
                 $id_match = $_POST['id'];
                 $number_of_ticket=$_POST["number_of_ticket"];
                 $data = ["id_user"=>$id_user, "ticket_count"=>$number_of_ticket, "id_match"=> $id_match];
               
                 $reservation = new ReservationModel();
                 if( $reservation->addReservation($data)){

                 }else {

                 }
             }
      }
    


  }