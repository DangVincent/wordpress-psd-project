const myProjectApp = {};

//selectors
myProjectApp.tabButtons;
myProjectApp.tabPanels;

//arrow tag
const arrow = document.createElement("span");
arrow.innerHTML = "&#8964;";

myProjectApp.tabEvent = function (event) {

   //hides all tab panels
   myProjectApp.tabPanels.forEach(panel => {
      panel.hidden = true;
   });
   // mark all tabs as unselected
   myProjectApp.tabButtons.forEach(tab => {
      tab.setAttribute('aria-selected', false);
      tab.classList.remove('services__item--active');
      if (tab.contains(arrow)) {
         tab.removeChild(arrow);
      }
   });
   // mark this clicked tab as selected
   event.currentTarget.setAttribute('aria-selected', true);
   event.currentTarget.classList.add('services__item--active');
   event.currentTarget.insertAdjacentElement('beforeend', arrow);
   // find the associated tabPanel and show it
   const { id } = event.currentTarget;

   const tabPanel = myProjectApp.tabPanels.find(
      panel => panel.getAttribute('aria-labelledby') === id
   );
   tabPanel.hidden = false;
}

myProjectApp.init = function () {
   this.tabButtons = document.querySelectorAll('[role="tab"]');
   this.tabPanels = Array.from(document.querySelectorAll('[role="tabpanel"]'));
   myProjectApp.tabPanels.forEach(panel => {
      panel.hidden = true;
   });
   this.tabButtons[0].classList.add('services__item--active');
   this.tabButtons[0].insertAdjacentElement('beforeend', arrow);
   this.tabPanels[0].hidden = false;
   this.tabButtons.forEach(button => button.addEventListener('click', this.tabEvent));
}

document.addEventListener('DOMContentLoaded', function () {
   myProjectApp.init();
});