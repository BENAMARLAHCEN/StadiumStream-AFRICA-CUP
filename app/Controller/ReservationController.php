<?php

namespace App\Controller;

use App\Model\ReservationModel;
use App\Model\TicketModel;
use Dompdf\Dompdf;

class ReservationController  extends Controller
{

    function addreservation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $id_user = $_SESSION['idUser'];     // we will take it from session !!
            $id_match = $_POST['id'];
            $number_of_ticket = $_POST["number_of_ticket"];
            $reservation = new ReservationModel();
            if ($number_of_ticket > 4  || $number_of_ticket < 1) {
                $_SESSION['errors'] = 'enter a valid number of tickets, you have max tree ticket';
                header('location:' . APP_URL . 'Match/reserve/' . $id_match);
                exit;
            } else if ($reservation->ticketRest($id_match) - $number_of_ticket < 0) {
                $_SESSION['errors'] = 'the ticket is finished choose another matche';
                header('location:' . APP_URL . 'Match/reserve/' . $id_match);
                exit;
            }

            $data = ["id_user" => $id_user, "ticket_count" => $number_of_ticket, "id_match" => $id_match];

            $reservid = $reservation->addReservation($data);
            if ($reservid) {
                header('location:' . APP_URL . 'Reservation/Ticket/' . $reservid);
            } else {
                $_SESSION['errors'] = 'we have some problem with generate your ticket';
                header('location:' . APP_URL . 'Match/reserve/' . $id_match);
            }
        }
    }

    public function Ticket($reservationID)
    {
        $ticket = new ReservationModel;
        $ticket = $ticket->getTiket($reservationID);
        $this->view('client/ticket', $ticket);
    }

    function TicketPDF($id)
    {
        $ticket = new ReservationModel;
        $ticket = $ticket->getTiket($id);
        ob_start();
        require_once '../app/View/client/ticketPDF.php';

        // Capture the included content from the output buffer
        $htmlContent = ob_get_clean(); 

        // Create an instance of Dompdf
        $dompdf = new Dompdf();

        // Load HTML content into Dompdf
        $dompdf->loadHtml($htmlContent);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render HTML as PDF
        $dompdf->render();

        // Output PDF as a file (you can also use 'stream' to output directly to the browser)
        $outputFilename = 'ticket.pdf';
        $dompdf->stream($outputFilename, array('Attachment' => 0));
    }
}
