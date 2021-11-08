<?php    
    class Reporte extends Controller{
        public function __construct(){
            parent::__construct();
        }

        public function reporteBase(){
            $pdf = new TCPDF();
            $pdf->setHeaderMargin(10);
            $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Título', 'Subtitulo');
            $pdf->SetMargins(20, 30, 20);
            $contenido = '<h1>Contenido del pdf</h1>';           
            $pdf->AddPage();
            $pdf->writeHTML($contenido);
            $pdf->Output();
        }

        public function pdfAreas(){
            $pdf = new TCPDF();
            $pdf->setHeaderMargin(10);
            $pdf->setHeaderData(PDF_HEADER_LOGO, 60, 'Reporte', 'Areas');
            $pdf->SetMargins(20, 30, 20);
            // Consulta a bd
            $areas = $this->getModel()->reporteAreas();
            $html = '<table border="1" cellpadding="3">
            <tr style="background-color: black; color: white; text-align:center;">
            <td>Código</td>
            <td>Area</td>
            <td>Sucursal</td>
            <td>Tel. Area</td> 
            </tr>';
            foreach ($areas as $key => $value) {
                $html .= '<tr>
                <td style="background-color: gray; text-align:center;">'.$value['codigoArea'].'</td>
                <td>'.$value['area'].'</td>
                <td>'.$value['sucursal'].'</td>
                <td>'.$value['telarea'].'</td>
                </tr>';
            }            
            $html .= '</table>';            
            $pdf->AddPage();
            $pdf->writeHTML($html);
            $pdf->Output();
        }

        public function pdfEmpleados(){
            if(!empty($_POST)){
                // Capturar datos
                if(!empty($_POST['txtCodigo'])){
                    $datos = $this->getModel()->reporteEmpleados($_POST['txtCodigo']);
                }  
                // Crear PDF
                $pdf = new TCPDF();
                $pdf->setHeaderMargin(10);
                $pdf->setHeaderData(PDF_HEADER_LOGO, 60, 'Reporte', 'Empleados');
                $pdf->SetMargins(20, 30, 20);
                if(!empty($datos)){
                    $html = '<table border="1" cellpadding="3">
                    <tr style="background-color: black; color: white; text-align:center;">
                    <td>Código</td>
                    <td>Empleado</td>
                    <td>Area</td>
                    <td>Sucursal</td>
                    <td>Sueldo Base</td>
                    <td>Sueldo Final</td>
                    </tr>';
                    foreach ($datos as $key => $value) {
                        $html .= '<tr>
                        <td style="background-color: gray; text-align:center;">'.$value['codigoEmpleado'].'</td>
                        <td>'.$value['nombre'].'</td>
                        <td>'.$value['area'].'</td>
                        <td>'.$value['sucursal'].'</td>
                        <td>$'.$value['sueldoBase'].'</td>
                        <td>$'.$value['sueldoFinal'].'</td>
                        </tr>';
                    }            
                    $html .= '</table>'; 
                } else{
                    $html = '<h1 style="text-align:center">Sin registros</h1>';
                }                           
                $pdf->AddPage();
                $pdf->writeHTML($html);
                $pdf->Output();

            } else { 
                $pagina = 'Reporte/pdfEmpleados';
                $this->getView()->loadView($pagina);
            }            
        }
    }
?>