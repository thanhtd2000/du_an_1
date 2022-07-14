const allItem = document.querySelectorAll(".item");
const contentItems = document.querySelectorAll(".body > div");
if (contentItems.length > 0) {
      //contentItems[0].classList.add("active");
}

const removeAllActive = () => {
      allItem.forEach(element => element.classList.remove("active"));
      contentItems.forEach(element => element.classList.remove("active"));
}

allItem.forEach(element => {
      element.addEventListener("click", (e) => {
            removeAllActive();
            e.target.classList.add("active");
            const dataThis = e.target.dataset.this;
            const domDataThis = document.querySelector(`#${dataThis}`);
            console.log(domDataThis, dataThis);
            if (domDataThis) {
                  domDataThis.classList.add("active");
            }
      });
})

