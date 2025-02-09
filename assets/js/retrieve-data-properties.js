let name1=document.getElementById("prop1_name");
let costpn1=document.getElementById("prop1_cost");
let area1=document.getElementById("prop1_area");
let beds1=document.getElementById("prop1_beds");
let baths1=document.getElementById("prop1_baths");
let garages1=document.getElementById("prop1_garages");
let img1=document.getElementById("img1");

let name2=document.getElementById("prop2_name");
let costpn2=document.getElementById("prop2_cost");
let area2=document.getElementById("prop2_area");
let beds2=document.getElementById("prop2_beds");
let baths2=document.getElementById("prop2_baths");
let garages2=document.getElementById("prop2_garages");
let img2=document.getElementById("img2");


let name3=document.getElementById("prop3_name");
let costpn3=document.getElementById("prop3_cost");
let area3=document.getElementById("prop3_area");
let beds3=document.getElementById("prop3_beds");
let baths3=document.getElementById("prop3_baths");
let garages3=document.getElementById("prop3_garages");
let img3=document.getElementById("img3");

let name4=document.getElementById("prop4_name");
let costpn4=document.getElementById("prop4_cost");
let area4=document.getElementById("prop4_area");
let beds4=document.getElementById("prop4_beds");
let baths4=document.getElementById("prop4_baths");
let garages4=document.getElementById("prop4_garages");
let img4=document.getElementById("img4");


let name5=document.getElementById("prop5_name");
let costpn5=document.getElementById("prop5_cost");
let area5=document.getElementById("prop5_area");
let beds5=document.getElementById("prop5_beds");
let baths5=document.getElementById("prop5_baths");
let garages5=document.getElementById("prop5_garages");
let img5=document.getElementById("img5");

let name6=document.getElementById("prop6_name");
let costpn6=document.getElementById("prop6_cost");
let area6=document.getElementById("prop6_area");
let beds6=document.getElementById("prop6_beds");
let baths6=document.getElementById("prop6_baths");
let garages6=document.getElementById("prop6_garages");
let img6=document.getElementById("img6");

fetch('get-data.php/get_guest_house_properties')
    .then(response=>response.json())
        .then(items=>{
            const d2=items.find((item)=>item.guest_house_id==8);
            const d1=items.find((item)=>item.guest_house_id==1);
            const d5=items.find((item)=>item.guest_house_id==2);
            const d4=items.find((item)=>item.guest_house_id==4);
            const d6=items.find((item)=>item.guest_house_id==5);
            const d3=items.find((item)=>item.guest_house_id==6);

            costpn1.innerHTML="Rent | "+d1.cost+"$";
            name1.innerHTML=d1.guest_house_name;
            area1.innerHTML=d1.area;
            beds1.innerHTML=d1.beds;
            baths1.innerHTML=d1.baths;
            garages1.innerHTML=d1.garages;
            img1.src=d1.guest_house_image;





            costpn2.innerHTML="Rent | "+d2.cost+"$";
            name2.innerHTML=d2.guest_house_name;
            area2.innerHTML=d2.area;
            beds2.innerHTML=d2.beds;
            baths2.innerHTML=d2.baths;
            garages2.innerHTML=d2.garages;
            img2.src=d2.guest_house_image;




            costpn3.innerHTML="Rent | "+d3.cost+"$";
            name3.innerHTML=d3.guest_house_name;
            area3.innerHTML=d3.area;
            beds3.innerHTML=d3.beds;
            baths3.innerHTML=d3.baths;
            garages3.innerHTML=d3.garages;
            img3.src=d3.guest_house_image;


            


            costpn4.innerHTML="Rent | "+d4.cost+"$";
            name4.innerHTML=d4.guest_house_name;
            area4.innerHTML=d4.area;
            beds4.innerHTML=d4.beds;
            baths4.innerHTML=d4.baths;
            garages4.innerHTML=d4.garages;
            img4.src=d4.guest_house_image;



            costpn5.innerHTML="Rent | "+d5.cost+"$";
            name5.innerHTML=d5.guest_house_name;
            area5.innerHTML=d5.area;
            beds5.innerHTML=d5.beds;
            baths5.innerHTML=d5.baths;
            garages5.innerHTML=d5.garages;
            img5.src=d5.guest_house_image;




            costpn6.innerHTML="Rent | "+d6.cost+"$"; 
            name6.innerHTML=d6.guest_house_name;
            area6.innerHTML=d6.area;
            beds6.innerHTML=d6.beds;
            baths6.innerHTML=d6.baths;
            garages6.innerHTML=d6.garages;
            img6.src=d6.guest_house_image;

        }   

        )
        .catch(error => console.error('Error fetching guest house data:', error));
