<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!--Per a llegir les variables que hem passat -->
        <title> <?php echo $titulo ?> </title>

        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body {
                margin: 0 15px 0 15px;
            }

            p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }
        </style>
    </head>
    <body>

        <div id="container">
            <h1>BENVINGUT A LA NOSTRA VISTA!</h1>

            <div id="body">
                <p>HOLA ESTE ÉS EL COS DE LA NOSTRA VISTA. :)</p>

                <!--Per a llegir les variables que hem passat -->
                <p><?php echo $cuerpo ?></p> 
                <p><?php
                    //  $foto="http://comerciodegandia.es/assets/uploads/files/stores/4ac0c-appgandia.jpg";
                echo "<table border=1>";   
                echo "<tr>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Email</th>
                    <th>Foto</th>
                    </tr>";
                
                foreach ($stores as $store) {
                    echo "<tr>";
                        echo '<td>' . $store->store_name . "</td>";
                        echo '<td>' . $store->store_address . "</td>";
                        echo '<td>' . $store->store_city . "</td>";
                        echo '<td>' . $store->store_state . "</td>";
                        echo '<td>' . $store->store_email . "</td>";
                       echo '<td>';
                     if(!empty($store->store_image_2)){
                           echo "<img src='http://comerciodegandia.es/assets/uploads/files/stores/" . $store->store_image_1 . "' width='300'/>";
                        }
                        echo '</td>';
                        echo "</tr>";
                       }
                    ?></p>

            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>

    </body>
</html>