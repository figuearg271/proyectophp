<?php
    class Graficos extends Controller{
        public function __construct(){
            parent::__construct();
        } 
        public function lineas(){
            $p = new chartphp();
            $datos[] = $this->getModel()->graficoLinea();
            $p->data = $datos;
            $p->chart_type = "line"; 
            // Diseño
            $p->title = "Cantidad de empleados por area"; // Título
            $p->xlabel = "Areas"; //Título eje x
            $p->ylabel = "Empleados"; //Título eje y 
            $p->theme = "dark"; // default light
            // Renderizar gráfico
            $out = $p->render('c1');
            $this->getView()->grafico = $out;
            $pagina = 'Graficos/lineas';
            $this->getView()->loadView($pagina);
        } 
    }
?>