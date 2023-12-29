
// Switch between sections
var editBtn = document.getElementById('editBtn');
var infosBtn = document.getElementById("infosBtn");
var matchesBtn = document.getElementById("matchesBtn");
var infosSection = document.getElementById("infosSection");
var matchesSection = document.getElementById("matchesSection");

var editInfos = () => {
    infosSection.classList.remove('d-none');
    matchesSection.classList.add('d-none');
    matchesBtn.classList.remove('text-primary', 'fw-bold', 'border-primary', 'border-3');
    infosBtn.classList.remove('text-secondary');
    matchesBtn.classList.add('text-secondary');
    infosBtn.classList.add('text-primary', 'fw-bold', 'border-primary', 'border-3');
    console.log(matchesBtn.classList);
}

infosBtn.addEventListener('click', ()=>editInfos());
editBtn.addEventListener('click', ()=>editInfos());

matchesBtn.addEventListener('click', function(){
    matchesSection.classList.remove('d-none');
    infosSection.classList.add('d-none');
    infosBtn.classList.remove('text-primary', 'fw-bold', 'border-primary', 'border-3');
    matchesBtn.classList.remove('text-secondary');
    infosBtn.classList.add('text-secondary');
    matchesBtn.classList.add('text-primary', 'fw-bold', 'border-primary', 'border-3');
});