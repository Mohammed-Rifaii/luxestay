let title = document.getElementById("house_name");
let desc = document.getElementById("house_description");
let about = document.getElementById("guest_house_about");
let loc = document.getElementById("house_location");
let loc2=document.getElementById("property_location");
let type=document.getElementById("property_type");
let property_id=document.getElementById("property_id");
let status=document.getElementById("house_status");
let area=document.getElementById("house_area");
let beds=document.getElementById("house_beds");
let baths=document.getElementById("house_baths");
let garage=document.getElementById("house_garages");
let costpn=document.getElementById("house_costpn");
let img1=document.getElementById("image_field_1");
let img2=document.getElementById("image_field_2");
let img3=document.getElementById("image_field_3");
let i=0;
fetch('get-data.php/get_guest_house')
    .then(response => response.json())
    .then(item => {
        if (item && item.length > 0) {
            property_id.name=
            title.innerHTML = item[0].guest_house_name;
            property_id.innerHTML=item[0].guest_house_id;
            desc.innerHTML = item[0].guest_house_des;
            about.innerHTML = item[0].guest_house_about;
            type.innerHTML=item[0].house_type;
            area.innerHTML=item[0].area;
            area.innerHTML+=" m<sup>2</sup>";
            areaOut=area;
            beds.innerHTML=item[0].beds;
            bedsOut=beds;
            baths.innerHTML=item[0].baths;
            bathsOut=baths;
            garage.innerHTML=item[0].garages;
            garagesOut=garage;
            costpn.innerHTML=item[0].cost;
            costpn.innerHTML+="$";
            costOut=item[0].cost;
        } else {
            title.innerHTML = "Guest house not found.";
        }

    })
    .catch(error => console.error('Error fetching guest house data:', error));


fetch('get-data.php/get_guest_house_location')
    .then(response => response.json())
    .then(item => {
        if (item && item.length > 0) {
            loc.innerHTML= item[0].location_desc;
            loc2.innerHTML=loc.innerHTML;

        } else {
            title.innerHTML = "Unkown Location"
        }
    })
    .catch(error => console.error('Error fetching guest house location data:', error));

fetch('get-data.php/get_house_type')
    .then(response => response.json())
    .then(item => {
        if (item && item.length > 0) {
            type.innerHTML= item[0].type_desc;

        } else {
            title.innerHTML = "Unkown Location"
        }
    })
fetch('get-data.php/get_house_images')
    .then(response=>response.json())
    .then(item=>{
        if(item && item.length>0){
            img1.src=item[0].image_path;
            img2.src=item[1].image_path;
            img3.src=item[2].image_path;
        }
        }

    )
    .catch(error => console.error('Error fetching guest house images:', error));
