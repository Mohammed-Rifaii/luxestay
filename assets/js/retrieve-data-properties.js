console.log("asdasdas");

fetch('get-data.php/get_guest_house_count')
    .then(response=>response.json())
    .then(items=>{
        
                   

                    let num_properties=items[0]["COUNT(*)"];
                    fetch('get-data.php/get_guest_house_properties')
                    .then(response=>response.json())
                    .then(data=>{
                        let d = [...data]; // Use 'let' instead of 'const'
                
                        d = d.filter((item, index, self) =>
                            index === self.findIndex((t) => t.guest_house_id === item.guest_house_id));
                        const nextButton = document.createElement("button");
                        nextButton.classList.add("carousel-control-next", "cycle");
                        nextButton.setAttribute("type", "button");
                        nextButton.setAttribute("data-bs-target", "#hero-carousel");
                        nextButton.setAttribute("data-bs-slide", "next");
                        nextButton.innerHTML = `
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>`;

                        // Create the "Previous" button
                        const prevButton = document.createElement("button");
                        prevButton.classList.add("carousel-control-prev", "cycle");
                        prevButton.setAttribute("type", "button");
                        prevButton.setAttribute("data-bs-target", "#hero-carousel");
                        prevButton.setAttribute("data-bs-slide", "prev");
                        prevButton.innerHTML =`<span class="carousel-control-prev-icon" aria-hidden="true"></span>`;

                        let carousel=document.getElementById("carousel");
                        const carouselContainer = document.getElementById('hero-carousel');
                        const realestate=document.getElementById("real-estate");
                        realestate.appendChild(prevButton);

                        num_carousels=Math.ceil(num_properties/6);
                        
                        for(let i=0;i<num_carousels;i++){
                            let carousel=document.createElement("div");
                            carousel.classList.add("carousel-item");
                            if (i === 0) {
                                carousel.classList.add("active"); // Make the first carousel active
                            }
                            let carouselInner = document.createElement("div");
                            carouselInner.classList.add("carousel-inner");
                            let row = document.createElement("div");
                            row.classList.add("row", "gy-4");
                    // Loop through the properties and create cards
                        let delay=300;
                        for (let j = i * 6; j < (i + 1) * 6 && j < num_properties; j++) {
                            
                            let property = d[j];
                            let propertyCard = `
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay=${delay}>
                                    <div class="card">
                                        <img src="${property.guest_house_image}" class="img-fluid" alt="">
                                        <div class="card-body">
                                            <span class="sale-rent">Rent | ${property.cost}$</span>
                                            <h3><a href="property-single.php?guest_house_id=${property.guest_house_id}" class="stretched-link">${property.guest_house_name}</a></h3>
                                            <div class="card-content d-flex-column justify-content-center text-center">
                                                <div class="row property-info">
                                                    <div class="col">Area</div>
                                                    <div class="col">Beds</div>
                                                    <div class="col">Baths</div>
                                                    <div class="col">Garages</div>

                                                </div>

                                                <div class="row">
                                                    <div class="col">${property.area}</div>
                                                    <div class="col">${property.beds}</div>
                                                    <div class="col">${property.baths}</div>
                                                    <div class="col">${property.garages}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            row.innerHTML += propertyCard;
                            delay+=50;

                        }
                        carouselInner.appendChild(row);
                        
                        
                        carousel.appendChild(carouselInner);
                        carouselContainer.appendChild(carousel);
                        realestate.appendChild(nextButton);
                }

                
            })
            .catch(error => console.error('Error fetching guest house data:', error));
    })
    .catch(error => console.error('Error fetching guest house count:', error));

