var Bungalow = {
    initialize: function (id, name, color, capacity) {
        this.id = id;
        this.name = name;
        this.color = color;
        this.capacity = capacity;
        this.containerDiv = document.getElementById("bungalows-container");
        this.guests = null;
        this.numberOfGuests = null;
        this.makeGuests();
    },

    makeGuests: function (synchronous) {
        var currentBungalow = this;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status == 200) {
                callback(currentBungalow, JSON.parse(this.responseText));
            }
        };
        xhttp.open("GET", "get-guests.php?bungalow_id=" + this.id, true);
        xhttp.send();

        function callback(bungalow, guests) {
            bungalow.guests = guests;
            bungalow.numberOfGuests = guests.length;
            bungalow.makeDiv();
            bungalow.makeModal();
            if(synchronous) {
                bungalow.emptyModal();
                bungalow.fillModal();
            }
        }
    },

    makeDiv: function () {
        if(!this.div) {
            var wrapper = document.createElement("div");
            wrapper.className = "col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-1 col-md-2 col-lg-offset-1-col-lg-2";
            var div = document.createElement("div");
            div.id = this.name;
            div.classList.add("bungalow");
            div.setAttribute("data-toggle", "modal");
            div.setAttribute("data-target", "#bungalow-modal");
            div.style.backgroundColor = this.color;
            div.innerHTML = "<h4>" + this.name + "</h4>";
            this.containerDiv.appendChild(wrapper);
            wrapper.appendChild(div);
            this.div = div;
        }
        if(this.userIsInside()) {
            if(!this.div.classList.contains("user-inside")) {
                this.div.classList.add("user-inside");
                this.div.innerHTML += "<p>Vous êtes ici</p>";
            }
        } else {
            this.div.classList.remove("user-inside");
            this.div.innerHTML = "<h4>" + this.name + "</h4>";
        }
        if(!this.isAvailable()) {
            if(!this.div.classList.contains("unavailable")) {
                this.div.innerHTML += "<p>COMPLET</p>";
                this.div.classList.add("unavailable");
            }
        } else {
            this.div.classList.remove("unavailable");
        }

    },

    userIsInside: function () {
        return this.guests.find(function (guest) {
            return guest === (prenom_utilisateur.toLowerCase() + " " + nom_utilisateur.toLowerCase());
        });
    },

    isAvailable: function () {
        return this.numberOfGuests < this.capacity;
    },

    isEmpty: function () {
        return this.numberOfGuests === 0;
    },

    makeModal: function () {
        // Get the modal
        this.modal = document.getElementById("bungalow-modal");
        this.modalTitle = this.modal.getElementsByClassName("modal-title")[0];
        this.modalBody = this.modal.getElementsByClassName("modal-body")[0];
        this.modalFooter = this.modal.getElementsByClassName("modal-footer")[0];

        //Show and hide behaviour is already defined by Bootstrap
        var _this = this;
        this.div.onclick = function () {
            _this.emptyModal();
            _this.fillModal();
        };
    },

    emptyModal: function () {
        this.modalTitle.innerHTML = "";
        this.modalBody.innerHTML = "";
        this.modalFooter.innerHTML = "";
    },

    fillModal: function () {
        this.makeTitle();
        this.makeBody();
        this.makeFooter();
    },

    makeTitle: function () {
        this.modalTitle.innerHTML = this.name;
    },

    makeBody: function () {
        var remainingCapacity = this.capacity - this.numberOfGuests;
        if(this.isEmpty()) {
            var paragraph = document.createElement("p");
            paragraph.setAttribute("class", "remainingCapacity");
            paragraph.innerHTML = "Bungalow vide : " + remainingCapacity + " places restantes";
            this.modalBody.appendChild(paragraph);
        } else {
            var table = document.createElement("table");
            var tableBody = document.createElement("tbody");
            table.appendChild(tableBody);
            this.modalBody.appendChild(table);

            var guest = null;
            var row = null;
            for(var i = 0; i < this.guests.length; i++) {
                guest = this.guests[i];
                row = this.makeGuestRowFor(guest);
                tableBody.appendChild(row);
            }
            if(this.isAvailable()) {
                row = document.createElement("tr");
                var infoCell = document.createElement("td");
                var info = document.createElement("p");
                info.setAttribute("class", "remainingCapacity");
                info.innerHTML = remainingCapacity + " places restantes";
                infoCell.appendChild(info);
                row.appendChild(infoCell);
                tableBody.appendChild(row);
            }
        }
    },

    makeGuestRowFor: function (guest) {
        var row = document.createElement("tr");
        var nameCell = document.createElement("td");
        var name = document.createElement("p");
        name.innerHTML = guest;
        nameCell.appendChild(name);
        row.appendChild(nameCell);
        return row;
    },

    makeFooter: function () {
        if(this.isAvailable()) {
            this.makeChoiceButton();
        } else {
            this.makeAlert();
        }
    },

    makeChoiceButton: function () {
        var choiceButton = document.createElement("button");
        choiceButton.setAttribute("class", "btn btn-primary");
        choiceButton.setAttribute("type", "button");
        var _this = this;
        choiceButton.onclick = function () {
            _this.addGuest(_this);
        };
        choiceButton.innerHTML = "Choisir ce bungalow";
        this.modalFooter.appendChild(choiceButton);
    },

    makeAlert: function () {
        var alert = document.createElement("div");
        alert.setAttribute("class", "alert alert-danger alert-full-bungalow");
        alert.setAttribute("role", "alert");
        alert.innerHTML = "Ce bungalow est <strong>complet</strong>!";
        this.modalFooter.appendChild(alert);
    },

    addGuest: function (currentBungalow) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if(xhttp.readyState === 4 && (xhttp.status === 200 || xhttp.status === 0)) {
                callback(currentBungalow);
            }
        };
        xhttp.open("GET", "add-guest.php?bungalow_id=" + this.id + "&nom=" + nom_utilisateur + "&prenom=" + prenom_utilisateur, true);
        xhttp.send();

        function callback(currentBungalow) {
            Bungalows.forEach(function (bungalow) {
                bungalow.makeGuests();
            });
            currentBungalow.makeGuests("DO IT NOW");
        }
    },
};

Bungalow = Class.create(Bungalow);

function initializeBungalows() {
    bungalowsData = [{
            id: 1,
            name: "Cottage 1",
            color: "#795548",
            capacity: 14
        },
        {
            id: 4,
            name: "Cottage 4",
            color: "#795548",
            capacity: 12
        },
        {
            id: 9,
            name: "Cottage 9",
            color: "#2196F3",
            capacity: 17
        },
        {
            id: 11,
            name: "Cottage 11",
            color: "#2196F3",
            capacity: 16
        },
        {
            id: 12,
            name: "Cottage 12",
            color: "#2196F3",
            capacity: 14
        },
        {
            id: 13,
            name: "Cottage 13",
            color: "#43A047",
            capacity: 15
        },
        {
            id: 14,
            name: "Cottage 14",
            color: "#43A047",
            capacity: 16
        },
        {
            id: 16,
            name: "Cottage 16",
            color: "#43A047",
            capacity: 12
        },
        {
            id: 17,
            name: "Cottage 17",
            color: "#FFEB3B",
            capacity: 18
        },
        {
            id: 18,
            name: "Cottage 18",
            color: "#FFEB3B",
            capacity: 19
        },
        {
            id: 19,
            name: "Cottage 19",
            color: "#FFEB3B",
            capacity: 11
        },
        {
            id: 25,
            name: "Cottage 25",
            color: "#F44336",
            capacity: 11
        },
        {
            id: 26,
            name: "Cottage 26",
            color: "#F44336",
            capacity: 16
        },
        {
            id: 27,
            name: "Cottage 27",
            color: "#F44336",
            capacity: 14
        },
        {
            id: 31,
            name: "Cottage 31",
            color: "#9C27B0",
            capacity: 12
        },
        {
            id: 32,
            name: "Cottage 32",
            color: "#9C27B0",
            capacity: 12
        },
        {
            id: 35,
            name: "Cottage 35",
            color: "#9C27B0",
            capacity: 12
        },
        {
            id: 36,
            name: "Cottage 36",
            color: "#9C27B0",
            capacity: 12
        }

    ];
    bungalowsData.forEach(function (bungalow) {
        Bungalows.push(new Bungalow(bungalow.id, bungalow.name, bungalow.color, bungalow.capacity));
    });
}
