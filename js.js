
    function toggleMenu(menuId) {
        let menuList = document.getElementById(menuId);
        
        if(menuList.style.maxHeight == "0px" || menuList.style.maxHeight === "") {
            menuList.style.maxHeight = "300px";
        } else {
            menuList.style.maxHeight = "0px";
        }
    }
