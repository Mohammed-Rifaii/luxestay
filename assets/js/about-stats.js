let props=document.getElementById("housecounter");
let users=document.getElementById("usercount");
fetch('get-data.php/get_guest_house_count')
.then(response=>response.json())
    .then(items=>{ props.setAttribute('data-purecounter-end',items[0]["COUNT(*)"]) ;
console.log(items[0]["COUNT(*)"]);

    })
.catch(error => console.error('Error fetching guest house count:', error));

fetch('get-data.php/stats')
.then(response=>response.json())
    .then(items=>{ users.setAttribute('data-purecounter-end',items[0]["COUNT(*)"]) ;
console.log(items[0]["COUNT(*)"]);

    })
.catch(error => console.error('Error fetching guest house count:', error));