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

// ADD MEMBER
var noBox = 1;

function AddMember(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 1) {
        noBox++;
        document.getElementById(addMember).style.display = "block";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "block";
    } else if (noBox == 2) {
        document.getElementById('addmember2').style.display = "block";
        document.getElementById(addMemberBtn).style.display = "none";
        document.getElementById(removeMemberBtn).style.display = "block";
    }
}

function AddMemberDAC(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 1) {
        noBox++;
        document.getElementById(addMember).style.display = "block";
        document.getElementById(addMemberBtn).style.display = "none";
        document.getElementById(removeMemberBtn).style.display = "block";
    }
}

function RemoveMember(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 2) {
        noBox--;
        document.getElementById('addmember2').style.display = "none";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "block";
    }
    else if (noBox == 1) {
        document.getElementById(addMember).style.display = "none";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "none";
    }
}

function RemoveMemberDAC(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 2) {
        noBox--;
        document.getElementById(addMemberBtn).style.display = "none";
        document.getElementById(removeMemberBtn).style.display = "block";
    }
    else if (noBox == 1) {
        document.getElementById(addMember).style.display = "none";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "none";
    }
}