fetch(`./assets/1.json`)
    .then((response) => {
        return response.json()
    }).then(function(item) {
        let itemName = item.name,
            itemDescription = item.description,
            itemImage = item.image,
        //  itemPrice = item.price
            itemAttributes = item.attributes,
            propertyContainer = document.getElementById("property");
        //update the name
        let nameContainer = document.querySelector('.itemHeading');
        nameContainer.innerHTML = itemName;

        //update the description
        let descriptionContainer = document.querySelector('.itemDescription');
        descriptionContainer.innerHTML = itemDescription;

        //update the image
        let imgContainer = document.querySelector('.pizzaImg');
        imgContainer.setAttribute("src", itemImage);

        //get price
      

        //iterate through the attributes
        for (let i = 0; i < itemAttributes.length; i++) {
            let attribute = itemAttributes[i],
                attributeValue = attribute.value,
                attributeName = attribute.name;

            let attributeContainer = document.createElement("div");
            attributeContainer.classList.add("collapesCard");
            attributeContainer.innerHTML = `<div class="smText">${attributeName}</div>
                                            <div class="mainText">${attributeValue}</div>`;
            propertyContainer.appendChild(attributeContainer);
        }
    });
