// JS file for the museum of the american west website redesign
// @AUTHOR: Ben Groneman
// DATE: November 24th 2018
// START FUNCTION
window.onload = function() {
  setBootstrapNavItemClasses();
  setBoostrapAClasses();
}

/**
 * Gathers dom nodes, and inserts them into an iterable array.
 * @author - Benjamin B. Groneman
 * @author_email - ben_groneman@nols.edu
 * @param {string} selector - the css selector of the desired dom node
 * @return {array} elemArray - an iterable array of dom nodes
 */
function getDomNodeArray(selector) {

  // get the elements as a DOM collection
  let elemCollection = document.querySelectorAll(selector);
  // coerce the DOM collection into an array
  let elemArray = Array.prototype.slice.apply(elemCollection);
  return elemArray;

}

function setBootstrapNavItemClasses() {
	const nav_list_items = getDomNodeArray(".menu-item");
	const however_many_nav_items = nav_list_items.length;
	let i;
	for(i = 0; i < however_many_nav_items; i++) {
		nav_list_items[i].classList.add("nav-item");
	}
}

function setBoostrapAClasses() {
  const nav_list_a_tags = getDomNodeArray(".menu-item > a");
  const however_many_a_tags = nav_list_a_tags.length;
  let i;

  if (however_many_a_tags) {
    for(i = 0; i < however_many_a_tags; i++) {
      nav_list_a_tags[i].classList.add("nav-link");
    }
  } else {
    console.error("error, there are no nav list a tags");
  }
  
}
