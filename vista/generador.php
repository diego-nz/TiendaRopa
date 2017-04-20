<?php

/* incluimos primeramente el archivo que contiene la clase fpdf */
include ('vista/fdpdf/fdpdf.php');
/* tenemos que generar una instancia de la clase */
        $pdf = new FPDF();
        $pdf->AddPage();

/* seleccionamos el tipo, estilo y tamaño de la letra a utilizar */

        $pdf->Image('logo.jpg',10,10,110,30,'JPG');
        $pdf->SetFont('Helvetica', 'B', 15);
        $pdf->Ln(12);
        $pdf->Cell (0,10,"Folio de Venta: ",0,0,'R');
        $pdf->Ln(35);
        $pdf->SetFont('Helvetica', 'B', 25);
        $pdf->Cell(190,10,'Detalle de Venta',0,0,'C');
        $pdf->Ln();
        $pdf->SetFont('Helvetica', 'B', 14);

		$pdf->Ln(); //salto de linea
                $pdf->Write(10,'GIFTS');
		//$pdf->Cell(60,6,$_POST['']);
		$pdf->Ln(15);//ahora salta 15 lineas
		$pdf->SetTextColor('255','0','0');//para imprimir en rojo
		$pdf->Cell(15,6,$_POST['idp'],0,0,'L');
                $pdf->Cell(70,6,$_POST['pro'],0,0,'C');
                $pdf->Cell(45,6,$_POST['can'],0,0,'L');
                $pdf->Cell(30,6,$_POST['ven'],0,0,'C');
                $pdf->Cell(40,6,$_POST['subt'],0,0,'L');
                $pdf->Ln(150);


		//$pdf->Line(0,160,300,160);//impresión de linea
        $pdf->Output("factura.pdf",'F');
		echo "<script language='javascript'>window.open('factura.pdf','_self','');</script>";//para ver el archivo pdf generado
		exit;
	?>
