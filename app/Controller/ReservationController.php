<?php

namespace App\Controller;

use App\Model\ReservationModel;
use App\Model\TicketModel;

class ReservationController  extends Controller
{

    function addreservation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $id_user = $_SESSION['idUser'];     // we will take it from session !!
            $id_match = $_POST['id'];
            $number_of_ticket = $_POST["number_of_ticket"];
            if ($number_of_ticket > 4  || $number_of_ticket < 1) {
                $_SESSION['errors'] = 'enter a valid number of tickets, you have max tree ticket';
                header('location:' . APP_URL . 'Match/reserve/' . $id_match);
            }
            $data = ["id_user" => $id_user, "ticket_count" => $number_of_ticket, "id_match" => $id_match];
            $reservation = new ReservationModel();
            $reservid = $reservation->addReservation($data);
            if ($reservid) {
                header('location:' . APP_URL . 'Reservation/Ticket/' . $reservid);
            } else {
                $_SESSION['errors'] = 'we have some problem with generate your ticket';
                header('location:' . APP_URL . 'Match/reserve/' . $id_match);
            }
        }
    }

    public function Ticket($reservationID){
        $ticket = new ReservationModel;
        $ticket = $ticket -> getTiket($reservationID);
        var_dump($ticket);
        $this->view('client/ticket',$ticket);
    }
}
