<?php

function roomcat($cat){
    if($cat==1)
        return "VIP";
     if($cat==2)
        return "Delux";
     if($cat==3)
        return "Economy";
}

function roomStatus($st){
    if($st==0)
        return "Available";
     if($st==1)
        return "Booked";
     if($st==2)
        return "Pending"; 
    if($st==3)
        return "Checked In";
    if($st==4)
        return "Checked Out";
}