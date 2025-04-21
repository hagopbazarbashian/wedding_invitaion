<div class="lang-dropdown">
    <button class="lang-toggle" onclick="toggleLangDropdown()">
      <img src="https://flagcdn.com/w40/gb.png" alt="EN" />
      <span>EN</span>
      <i class="arrow-down">▼</i>
    </button>
  
    <div class="lang-options" id="langOptions">
      <a href="{{ route('switchLanguage', ['lang' => 'en']) }}">
        <img src="https://flagcdn.com/w40/gb.png" alt="EN" /> English
      </a>
      <a href="{{ route('switchLanguage', ['lang' => 'hy']) }}">
        <img src="https://flagcdn.com/w40/am.png" alt="HY" /> Armenian
      </a>
    </div>
  </div>
  
<style>
 .lang-dropdown.always-visible {
  position: fixed;
  bottom: 20px;
  left: 20px; /* 👈 switched from right to left */
  z-index: 9999;
  display: flex;
  flex-direction: column;
  gap: 8px;
  background: white;
  padding: 8px;
  border-radius: 8px;
  border: 1px solid #ccc;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
  font-family: sans-serif;
}
 .lang-dropdown {
    position: fixed;
    bottom: 20px;
    left: 20px; /* use right: 20px if you prefer */
    z-index: 9999;
    font-family: sans-serif;
}

.lang-toggle {
 display: flex;
  align-items: center;
  background: white;
  border: 1px solid #ccc;
  border-radius: 8px;
  padding: 6px 12px;
  cursor: pointer;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
  gap: 8px;
}

.lang-toggle img {
 width: 24px;
  height: 24px;
  border-radius: 50%;
}

.lang-options {
 display: none;
  flex-direction: column;
  background: white;
  border: 1px solid #ccc;
  border-radius: 6px;
  margin-top: 8px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  position: absolute;
  left: 0;
  bottom: 45px;
  min-width: 130px;
}

.lang-options a {
 display: flex;
  align-items: center;
  padding: 8px 12px;
  text-decoration: none;
  color: #333;
  gap: 8px;
  font-size: 14px;
  transition: background 0.2s;
}

.lang-options a:hover {
 background-color: #f0f0f0;
}

.arrow-down {
 font-size: 12px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .lang-toggle {
      padding: 5px 10px;
      font-size: 13px;
  }

  .lang-options {
      min-width: 110px;
  }
}

.lang-dropdown.always-visible a {
  display: flex;
  align-items: center;
  gap: 6px;
  text-decoration: none;
  font-size: 14px;
  color: #333;
  transition: background 0.2s;
}

.lang-dropdown.always-visible a:hover {
  background-color: #f8f8f8;
  border-radius: 6px;
  padding: 4px 6px;
}

.lang-dropdown.always-visible img {
  width: 24px;
  height: 24px;
  border-radius: 50%;
}

</style>
<script>
 function toggleLangDropdown() {
   const dropdown = document.getElementById("langOptions");
   if (dropdown.style.display === "flex") {
     dropdown.style.display = "none";
   } else {
     dropdown.style.display = "flex";
   }
 }

 // Optional: close on click outside
 document.addEventListener("click", function (event) {
   const langBox = document.querySelector(".lang-dropdown");
   const dropdown = document.getElementById("langOptions");
   if (!langBox.contains(event.target)) {
     dropdown.style.display = "none";
   }
 });
</script>
