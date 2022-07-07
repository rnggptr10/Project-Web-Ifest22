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

// ADD MEMBER
var noBox = 1;

function AddMemberCTF(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 1) {
        noBox++;
        document.getElementById(addMember).style.display = "block";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "block";
        document.getElementById("team_member_1").setAttribute("required", "");
        document.getElementById("team_member_1_institute").setAttribute("required", "");
        document.getElementById("team_member_1_id_card").setAttribute("required", "");
    } else if (noBox == 2) {
        document.getElementById('addmember2').style.display = "block";
        document.getElementById(addMemberBtn).style.display = "none";
        document.getElementById(removeMemberBtn).style.display = "block";
        document.getElementById("team_member_2").setAttribute("required", "");
        document.getElementById("team_member_2_institute").setAttribute("required", "");
        document.getElementById("team_member_2_id_card").setAttribute("required", "");
    }
}

function AddMemberIntention(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 1) {
        noBox++;
        document.getElementById(addMember).style.display = "block";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "block";
        document.getElementById("team_member_3").setAttribute("required", "");
        document.getElementById("team_member_3_institute").setAttribute("required", "");
        document.getElementById("team_member_3_id_card").setAttribute("required", "");
    } else if (noBox == 2) {
        document.getElementById('addmember2').style.display = "block";
        document.getElementById(addMemberBtn).style.display = "none";
        document.getElementById(removeMemberBtn).style.display = "block";
        document.getElementById("team_member_4").setAttribute("required", "");
        document.getElementById("team_member_4_institute").setAttribute("required", "");
        document.getElementById("team_member_4_id_card").setAttribute("required", "");
    }
}

//  Buat DAC & Techno
function AddMemberDAC(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 1) {
        noBox++;
        document.getElementById(addMember).style.display = "block";
        document.getElementById(addMemberBtn).style.display = "none";
        document.getElementById(removeMemberBtn).style.display = "block";
        document.getElementById("team_member_3").setAttribute("required", "");
        document.getElementById("team_member_3_institute").setAttribute("required", "");
        document.getElementById("team_member_3_id_card").setAttribute("required", "");
    }
}

function RemoveMemberCTF(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 2) {
        noBox--;
        document.getElementById('addmember2').style.display = "none";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "block";
        document.getElementById("team_member_2").removeAttribute("required");
        document.getElementById("team_member_2_institute").removeAttribute("required");
        document.getElementById("team_member_2_id_card").removeAttribute("required");
    }
    else if (noBox == 1) {
        document.getElementById(addMember).style.display = "none";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "none";
        document.getElementById("team_member_1").removeAttribute("required");
        document.getElementById("team_member_1_institute").removeAttribute("required");
        document.getElementById("team_member_1_id_card").removeAttribute("required");
    }
}

function RemoveMemberIntention(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 2) {
        noBox--;
        document.getElementById('addmember2').style.display = "none";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "block";
        document.getElementById("team_member_4").removeAttribute("required");
        document.getElementById("team_member_4_institute").removeAttribute("required");
        document.getElementById("team_member_4_id_card").removeAttribute("required");
    }
    else if (noBox == 1) {
        document.getElementById(addMember).style.display = "none";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "none";
        document.getElementById("team_member_3").removeAttribute("required");
        document.getElementById("team_member_3_institute").removeAttribute("required");
        document.getElementById("team_member_3_id_card").removeAttribute("required");
    }
}

function RemoveMemberDAC(addMember, addMemberBtn, removeMemberBtn) {
    console.log(noBox);
    if (noBox == 2) {
        noBox--;
        document.getElementById(addMemberBtn).style.display = "none";
        document.getElementById(removeMemberBtn).style.display = "block";
        document.getElementById("team_member_1").removeAttribute("required");
        document.getElementById("team_member_1_institute").removeAttribute("required");
        document.getElementById("team_member_1_id_card").removeAttribute("required");
    }
    else if (noBox == 1) {
        document.getElementById(addMember).style.display = "none";
        document.getElementById(addMemberBtn).style.display = "block";
        document.getElementById(removeMemberBtn).style.display = "none";
    }
}