fetch("js/db.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (products) {
    let placeholder = document.querySelector("#data-output");
    let out = "";
    for (let product of products) {
      out += `
         <tr>
            
            <td>${product.customerNumber}</td>
            <td>${product.firstName}</td>
            <td>${product.lastName}</td>
            <td>${product.favouriteDrink}</td>
            <td>${product.favouriteTurtle}</td>
            <td>${product.turtlesFavouriteFood}</td>
            <td>${product.customerAddress}</td>
            <td>${product.customerEmail}</td>
            <td>${product.customerPhone}</td>
         </tr>
      `;
    }

    placeholder.innerHTML = out;
  });
