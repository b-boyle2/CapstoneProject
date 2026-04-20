document.addEventListener('DOMContentLoaded', () => {
    const activeOrdersHeader = document.querySelector('#activeOrders');
    const previousOrdersHeader = document.querySelector('#previousOrders');
    const ordersList = document.querySelector('#orderListItems');

    let activeOrdersData;
    let previousOrdersData;

    activeOrdersHeader.addEventListener('click', () => {
        if (activeOrdersHeader.classList.contains('activeSubsection')){
            return;
        }
        else {
            activeOrdersHeader.classList.add('activeSubsection');
            previousOrdersHeader.classList.remove('activeSubsection');
            displayOrders(activeOrdersData);
            console.log(activeOrdersData);
        }
    })

    if (previousOrdersHeader) {
        previousOrdersHeader.addEventListener('click', () => {
            if (previousOrdersHeader.classList.contains('activeSubsection')){
                return;
            }
            else {
                previousOrdersHeader.classList.add('activeSubsection');
                activeOrdersHeader.classList.remove('activeSubsection');
                displayOrders(previousOrdersData);
                console.log(previousOrdersData);
            }
        })
    }
    
    
    function loadOrders() {
        fetch(`src/getOrders.php`)
            .then(res=> res.json())
            .then(data => {
                filterOrders(data);
            })
           /*.then(res => res.text())
            .then(data => {
            console.log(data);        // logs raw PHP output
            document.body.innerHTML = data; // optional: display it in page
            })*/
        .catch(err => console.error(err));
    }

    function filterOrders(data) {
        activeOrdersData = data.filter(order => order.Status === "pending" || order.Status === "processing" || order.Status === "shipped")
        displayOrders(activeOrdersData);
        console.log(`Active orders: ${activeOrdersData}`);
    
        previousOrdersData = data.filter(order => order.Status === "delivered" || order.Status === "canceled")
        displayOrders(previousOrdersData);
        console.log(`Previous: ${previousOrdersData}`);

        if(activeOrdersHeader.classList.contains("activeSubsection")) {
            displayOrders(activeOrdersData);
        }
        else if(previousOrdersHeader.classList.contains("activeSubsection")) {
            displayOrders(previousOrdersData);
        }
        
    }

    function displayOrders(data){
        //clears previous results
        if (ordersList) {
            ordersList.innerHTML = '';
        }
        if (data != null){
        
            data.forEach(order => {
                const datetime = order.CreatedAt;
                const dateObj = new Date(datetime.replace(" ", "T"));

                const orderDate = dateObj.toLocaleDateString();
                const orderTime = dateObj.toLocaleTimeString();


                const row = document.createElement("tr");

                const id = document.createElement("td");
                id.classList.add("alignLeft");
                id.textContent = order.ID;
                row.dataset.orderID = order.ID;

                const status = document.createElement("td");
                status.classList.add("alignLeft");
                status.textContent = order.Status;

                const date = document.createElement("td");
                date.classList.add("alignRight");
                date.textContent = orderDate;

                const time = document.createElement("td");
                time.classList.add("alignRight");
                time.textContent = orderTime;

                const customer = document.createElement("td");
                customer.classList.add("alignLeft");
                customer.textContent = order.Username;

                const totalPrice = document.createElement("td");
                totalPrice.classList.add("alignRight");
                totalPrice.textContent = order.TotalPrice;

                row.appendChild(id);
                row.appendChild(status);
                row.appendChild(date);
                row.appendChild(time);
                row.appendChild(customer);
                row.appendChild(totalPrice);

                ordersList.appendChild(row);
            })
        }
    }

    ordersList.addEventListener("click", (e) => {
        const row = e.target.closest("tr");
        if (!row) return;
        orderID = row.dataset.orderID;
        window.location.href = `singleOrder.php?orderID=${orderID}`;
    })

    loadOrders();
})