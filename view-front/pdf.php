<?php
require '../Controller/produitC.php';
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$DB = new config();
$ProduitC = new ProduitC();
$achats = $ProduitC->afficherproduits();
$html ='
<h2 class="font-weight-bolde" align="center" >PDF</h2>
<hr>
<br>
<br>
<br>
<br>
<br>
<br>
<table class="mt-5 pt-5" border="2" align="center">
<tr>
       <th>Id produit</th> 
       <th>Nom   </th>
       <th>Description  </th>
       <th>Code categorie </th>
       <th>Id categorie </th>
       <th>pu_achat </th>
       <th>pu_vente </th>
       <th>qte_stock </th>
       <th>date </th>
       
      
       
       
       
    </tr>
    ';
    foreach($achats as $product):
        $html .='
        <tr>

        <td>
        
            <div class="product-info">
                <div>
                    <span>'.$product["id_produit"].'</span>
        
                </div>
            </div>
        </td>
        <td>
        
            <div class="product-info">
                <div>
                <span>' .$product["nom"].'</span>
                    
        
                </div>
            </div>
        </td>
        <td>
        
            <div class="product-info">
                <div>
                <span>' .$product["descr"].'</span>
                    
        
                </div>
            </div>
        </td>
        <td>
        
            <div class="product-info">
                <div>
                <span>'     .$product["code_categ"].'</span>
                   
        
                </div>
            </div>
        </td>
        <td>
        
            <div class="product-info">
                <div>
                <span>' .$product["id_scateg"].'</span>
                    
        
                </div>
            </div>
        </td>
        <td>
        
        <div class="product-info">
            <div>
            <span>' .$product["pu_achat"].'</span>
                
    
            </div>
        </div>
    </td>
    <td>
        
    <div class="product-info">
        <div>
        <span>' .$product["pu_vente"].'</span>
            

        </div>
    </div>
</td>
<td>
        
<div class="product-info">
    <div>
    <span>' .$product["qte_stock"].'</span>
        

    </div>
</div>
</td>
<td>
        
<div class="product-info">
    <div>
    <span>' .$product["date"].'</span>
        

    </div>
</div>
</td>
        </tr>
        
        ';
    endforeach;
    
    $html .= ' 
    </table>
';
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$dompdf->stream('facture.pdf',['Attachment'=>false]);   
?>