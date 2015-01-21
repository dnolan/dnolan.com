/*
	Expandable Listmenu Script, autoclosing
	Author : Daniel Nolan
	http://www.bleedingego.co.uk/webdev.php
*/

function initMenus() {
	if (!document.getElementsByTagName) return;
	
	var aMenus = document.getElementsByTagName("LI");
	for (var i = 0; i < aMenus.length; i++) {
		var mclass = aMenus[i].className;
		if (mclass.indexOf("treenode") > -1) {
			var submenu = aMenus[i].childNodes;
			for (var j = 0; j < submenu.length; j++) {
				if (submenu[j].tagName == "A") {
					
					submenu[j].onclick = function() {
					
						// Indicates if we need to exit before toggling the current
						// menu. We don't want to close it then re-open it again.
						var exit = 0; 

						// Get all list elements and loop them
						var aCloseMenus = document.getElementsByTagName("LI");
						for (var i = 0; i < aCloseMenus.length; i++) {
							// Get the A activator link for the menu.
							var activator = aCloseMenus[i].getElementsByTagName("A");
							// Get the submenu
							var smenu = aCloseMenus[i].getElementsByTagName("UL");

							// Check the activator and submenu exist
							if (activator[0] != null && smenu[0] != null)							
								// Is this an open menu
								if (activator[0].className == "treeopen") {
									// Close menu
									smenu[0].style.display = "none";
									activator[0].className = "treeclosed";
									// If this is the currently clicked node, set exit var
									if (activator[0] == this) exit = 1;
								}
						}
						
						// exit before node is toggled
						if (exit) return false;
					
						var node = this.nextSibling;
											
						while (1) {
							if (node != null) {
								if (node.tagName == "UL") {
									var d = (node.style.display == "none")
									node.style.display = (d) ? "block" : "none";
									this.className = (d) ? "treeopen" : "treeclosed";
									return false;
								}
								node = node.nextSibling;
							} else {
								return false;
							}
						}
						
						return false;
					}
					
					submenu[j].className = (mclass.indexOf("open") > -1) ? "treeopen" : "treeclosed";
				}
				
				if (submenu[j].tagName == "UL")
					submenu[j].style.display = (mclass.indexOf("open") > -1) ? "block" : "none";
			}
		}
	}
}

window.onload = initMenus;