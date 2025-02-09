
let name1=document.getElementById("prop1_name");
let costpn1=document.getElementById("prop1_cost");
let loc1=document.getElementById("prop1_location");
let img1=document.getElementById("img1");


let name2=document.getElementById("prop2_name");
let costpn2=document.getElementById("prop2_cost");
let loc2=document.getElementById("prop2_location");
let img2=document.getElementById("img2");


let name3=document.getElementById("prop3_name");
let costpn3=document.getElementById("prop3_cost");
let loc3=document.getElementById("prop3_location");
let img3=document.getElementById("img3");

fetch('get-data.php/get_guest_house_index')
    .then(response=>response.json())
    .then(items=>{
        const carousel1=items.find((item)=>item.guest_house_id==8);
        const carousel2=items.find((item)=>item.guest_house_id==6);
        const carousel3=items.find((item)=>item.guest_house_id==4);
        
        name1.textContent = carousel1.guest_house_name;
        costpn1.textContent = carousel1.cost+"$";
        loc1.textContent = carousel1.location_desc;
        img1.src = carousel1.image_path ;

        name2.textContent =carousel2.guest_house_name;
        costpn2.textContent = carousel2.cost+"$";
        loc2.textContent = carousel2.location_desc;
        loc2.textContent=decodeHtmlEntity(loc2.textContent);
        img2.src = carousel2.image_path ;

        name3.textContent = carousel3.guest_house_name;
        costpn3.textContent = carousel3.cost+"$";
        loc3.textContent = carousel3.location_desc;
        img3.src = carousel3.image_path ;
    })
    .catch(error => console.error('Error fetching guest house images:', error));

    
    function decodeHtmlEntity(str) {
        var doc = new DOMParser().parseFromString(str, 'text/html');
        return doc.documentElement.textContent;
    }
    
    
    