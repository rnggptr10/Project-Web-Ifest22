// JS untuk tambah 1 peserta Intention
function addMemberIntention(idCompetition, idBtn1, idBtn2){
    document.getElementById(idCompetition).style.display = "block";
    document.getElementById(idBtn1).style.display = "none";
    document.getElementById(idBtn2).style.display = "flex";
}

function removeMemberIntentionButton(idCompetition, idBtn1, idBtn2){
    document.getElementById(idCompetition).style.display = "none";
    document.getElementById(idBtn1).style.display = "flex";
    document.getElementById(idBtn2).style.display = "none";
}

// JS untukk tambah 2 peserta CTF



let count = 3;
const openOptionalMem = (category) => {
    // 1 for Intention
    // 2 for CTF
    // 3 for DA
    if (category === 1) {
        var numberOfMember = 5;
    } else if (category === 2) {
        var numberOfMember = 4;
    } else if (category === 3) {
        var numberOfMember = 4;
    } else {
        var numberOfMember = 4;
    }
    var input = document.createElement("input");
    var parent = document.getElementById("optional-member");
    var button = document.getElementById("add-member");
    input.setAttribute("type", "text");
    input.setAttribute("name", `team_member_${count}`);
    input.setAttribute("placeholder", `Member ${count}'s Name (Optional)`);
    input.setAttribute("class", "input-element-regis mt-3 dflex");
    parent.appendChild(input);
    count++;
    if (count === numberOfMember) {
        button.remove();
    }
};

const registNextSection = () => {
    setTimeout(() => {
        setTimeout(() => {
            document
                .getElementById("regist-section-1")
                .setAttribute("hidden", "true");
            document
                .getElementById("regist-section-2")
                .removeAttribute("hidden");
            document.getElementById("regist-back-btn").removeAttribute("hidden");
            slideInText("registForm");
        }, 150);
        slideOutText("registForm");
    }, 50);
};

const backToSection1 = () => {
    setTimeout(() => {
        setTimeout(() => {
            document
                .getElementById("regist-section-1")
                .removeAttribute("hidden");
            document
                .getElementById("regist-section-2")
                .setAttribute("hidden", "true");
            document
                .getElementById("regist-back-btn")
                .setAttribute("hidden", "true");
            slideInText("registForm");
        }, 150);
        slideOutText("registForm");
    }, 50);
};

if (document.getElementById("id_card") !== null) {
    const idCardFileBtn = document.getElementById("id_card");
    const fileChoosenIdCard = document.getElementById("idcard-chosen");
    idCardFileBtn.addEventListener("change", function () {
        fileChoosenIdCard.textContent = this.files[0].name;
    });
}

if (document.getElementById("payment-confirmation") !== null) {
    const paymentFileBtn = document.getElementById("payment-confirmation");
    const fileChoosenPayment = document.getElementById("payment-chosen");
    paymentFileBtn.addEventListener("change", function () {
        fileChoosenPayment.textContent = this.files[0].name;
    });
}
