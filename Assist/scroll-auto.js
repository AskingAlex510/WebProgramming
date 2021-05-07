var root = document.documentElement;
var scrollElementsDisplayed = getComputedStyle(root).getPropertyValue("--scroll-elements-displayed");
var scrollContent = document.querySelector(".scroll_content");
var scrollContent1 = document.querySelector(".scroll_content1");

root.style.setProperty("--scroll-elements", scrollContent.children.length); /** Take the lenght of elements **/
root.style.setProperty("--scroll1-elements", scrollContent1.children.length); /** Take the lenght of elements **/

/** Create the clone copy, to avoid use a duplicate elements **/
for (let i = 0; i < scrollElementsDisplayed ; i++){
  scrollContent.appendChild(scrollContent.children[i].cloneNode(true));
}

for (let i = 0; i < scrollElementsDisplayed ; i++){
  scrollContent1.appendChild(scrollContent1.children[i].cloneNode(true));
}
