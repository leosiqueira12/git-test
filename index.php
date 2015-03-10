<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
<!DOCTYPE html>
 <html>
<head>
<meta charset="utf-8">
        <title> exercício 4.1 </title>
        </head>
        <body>
   <?php
+    $i=0;
+    $info[1][1] = '02K01';
+    $info[1][2] = 'Tecnologia Web II';
+    $info[1][3] = 'Segunda';
+    $info[1][4] = 'Charles';
+    $info[2][1] = '02J01';
+    $info[2][2] = 'Linguagem de Programacao I';
+    $info[2][3] = 'Terça';
+    $info[2][4] = 'João';
+    $info[3][1] = '02K01';
+    $info[3][2] = 'Linguagem de Programacao I';
+    $info[3][3] = 'Quarta';
+    $info[3][4] = 'Charles';
+    
+    
+    for($l = 0;$l <= 3; $l++){
+        
+        if($l==0){
+            echo '<style type="text/css">
+                    table, td, th
+                    {
+                      border: 3px solid black;
+                    }
+                  </style><table><tr><td><b>Turma</b></td>
+                  <td><b>Disciplina</b></td>
+                  <td><b>Semana</b></td>
+                  <td><b>Professor</b></td></tr>';
+        }
+            echo '<tr>';
+            
+            for($j = 0;$j <= 3; $j++){
+                echo '<td>'.$info[$l][$j].'</td>';
+            }
+            echo '</tr>';
+        }
+    echo '</table>;' 
+?>
</body>
        
        
        
        
