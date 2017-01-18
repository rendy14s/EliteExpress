<?php
include "../../Koneksi/koneksi.php";

    $sql    = mysqli_query($conn, "SELECT * FROM ongkir WHERE `from` = '$from' && `to` = '$to'");
    $data   = mysqli_fetch_array($sql);

    $price_darat    = $data['price_darat'];
    $price_laut     = $data['price_laut'];
    $price_udara    = $data['price_udara'];


    if($via == "Darat" ){
        if($asuransi == "YES"){
                  if($paket == "ONS"){   
                        $tot_price  = $price_darat*$berat+0.3+0.1;
                  }
                        elseif($paket == "SDS"){
                                $tot_price  = $price_darat*$berat+0.5+0.1;
                        }      
                                elseif($paket == "REGULAR"){
                                        $tot_price  = $price_darat*$berat+0.1;
                                }
        }
                elseif($asuransi == "NO"){
                            if($paket == "ONS"){   
                                        $tot_price  = $price_darat*$berat+0.3;
                             }
                                       elseif($paket == "SDS"){
                                                   $tot_price  = $price_darat*$berat+0.5;
                                       }      
                                                        elseif($paket == "REGULAR"){
                                                                      $tot_price  = $price_darat*$berat;
                                                        }
                }
    }


    if($via == "Laut" ){
        if($asuransi == "YES"){
                  if($paket == "ONS"){   
                        $tot_price  = $price_darat*$berat+0.5+0.3;
                  }
                        elseif($paket == "SDS"){
                                $tot_price  = $price_darat*$berat+0.7+0.3;
                        }      
                                elseif($paket == "REGULAR"){
                                        $tot_price  = $price_darat*$berat+0.3;
                                }
        }
                elseif($asuransi == "NO"){
                            if($paket == "ONS"){   
                                        $tot_price  = $price_darat*$berat+0.5;
                             }
                                       elseif($paket == "SDS"){
                                                   $tot_price  = $price_darat*$berat+0.7;
                                       }      
                                                        elseif($paket == "REGULAR"){
                                                                      $tot_price  = $price_darat*$berat+0.4;
                                                        }
                }
    }
    

    if($via == "Udara" ){
        if($asuransi == "YES"){
                  if($paket == "ONS"){   
                        $tot_price  = $price_darat*$berat+0.8+0.5;
                  }
                        elseif($paket == "SDS"){
                                $tot_price  = $price_darat*$berat+0.10+0.5;
                        }      
                                elseif($paket == "REGULAR"){
                                        $tot_price  = $price_darat*$berat+0.5;
                                }
        }
                elseif($asuransi == "NO"){
                            if($paket == "ONS"){   
                                        $tot_price  = $price_darat*$berat+0.8;
                             }
                                       elseif($paket == "SDS"){
                                                   $tot_price  = $price_darat*$berat+0.10;
                                       }      
                                                        elseif($paket == "REGULAR"){
                                                                      $tot_price  = $price_darat*$berat+0.6;
                                                        }
                }
    }