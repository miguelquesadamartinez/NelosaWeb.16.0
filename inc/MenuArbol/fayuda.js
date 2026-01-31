// Definition of class Folder 
// ***************************************************************** 
 
function Folder(folderDescription, hreference) //constructor 
{ 
  //constant data 
  this.desc = folderDescription 
  this.hreference = hreference 
  this.id = -1   
  this.navObj = 0  
  this.iconImg = 0  
  this.nodeImg = 0  
  this.isLastNode = 0 
 
  //dynamic data 
  this.isOpen = true 
  this.iconSrc = "imagenes/arbol/tfolderopen.gif"   
  this.children = new Array 
  this.nChildren = 0 
 
  //methods 
  this.initialize = initializeFolder 
  this.setState = setStateFolder 
  this.addChild = addChild 
  this.createIndex = createEntryIndex 
  this.hide = hideFolder 
  this.display = display 
  this.renderOb = drawFolder 
  this.totalHeight = totalHeight 
  this.subEntries = folderSubEntries 
  this.outputLink = outputFolderLink 
} 
 
function setStateFolder(isOpen) 
{ 
  var subEntries 
  var totalHeight 
  var fIt = 0 
  var i=0 
 
  if (isOpen == this.isOpen) 
    return 
 
  if (browserVersion == 2)  
  { 
    totalHeight = 0 
    for (i=0; i < this.nChildren; i++) 
      totalHeight = totalHeight + this.children[i].navObj.clip.height 
      subEntries = this.subEntries() 
    if (this.isOpen) 
      totalHeight = 0 - totalHeight 
    for (fIt = this.id + subEntries + 1; fIt < nEntries; fIt++) 
      indexOfEntries[fIt].navObj.moveBy(0, totalHeight) 
  }  
  this.isOpen = isOpen 
  propagateChangesInState(this) 
} 
 
function propagateChangesInState(folder) 
{   
  var i=0 
  var nc = folder.nChildren
 
  if (folder.isOpen) 
  { 
    if (folder.nodeImg) 
      if (folder.isLastNode)
        folder.nodeImg.src = "imagenes/arbol/tmlastnode.gif" 
      else 
	  folder.nodeImg.src = "imagenes/arbol/tmnode.gif" 
    folder.iconImg.src = "imagenes/arbol/tfolderopen.gif" 
    for (i=0; i<folder.nChildren; i++) 
      folder.children[i].display() 
  } 
  else 
  { 
    if (folder.nodeImg) 
      if (folder.isLastNode)
        if (nc) 
         folder.nodeImg.src = "imagenes/arbol/tplastnode.gif" 
        else
         folder.nodeImg.src = "imagenes/arbol/tlastnode.gif"
      else 
        if (nc)
	  folder.nodeImg.src = "imagenes/arbol/tpnode.gif" 
        else
	  folder.nodeImg.src = "imagenes/arbol/tnode.gif" 
     folder.iconImg.src = "imagenes/arbol/tfolderclosed.gif" 
    for (i=0; ifolder.nChildren; i++) 
      folder.children[i].hide() 
  }  
} 
 
function hideFolder() 
{ 
  if (browserVersion == 1) { 
    if (this.navObj.style.display == "none") 
      return 
    this.navObj.style.display = "none" 
  } else { 
    if (this.navObj.visibility == "hiden") 
      return 
    this.navObj.visibility = "hiden" 
  } 
   
  this.setState(0) 
} 
 
function initializeFolder(level, lastNode, leftSide) 
{ 
var j=0 
var i=0 
var numberOfFolders 
var numberOfDocs 
var nc 
      
  nc = this.nChildren 
   
  this.createIndex() 
 
  var auxEv = "" 
 
  if (browserVersion > 0) 
    if (nc)
     auxEv = "<a href='javascript:clickOnNode("+this.id+")'>" 
    else
     auxEv = "<a>"
  else 
    auxEv = "<a>" 
 
  if (level>0) 
    if (lastNode) //the last 'brother' in the children array 
    { 
      this.renderOb(leftSide + auxEv + "<img name='nodeIcon" + this.id + "' src='imagenes/arbol/tmlastnode.gif' border=0></a>") 
      leftSide = leftSide + "<img src='imagenes/arbol/tblank.gif'>"  
      this.isLastNode = 1 
    } 
    else 
    { 
      this.renderOb(leftSide + auxEv + "<img name='nodeIcon" + this.id + "' src='imagenes/arbol/tmnode.gif'  border=0></a>") 
      leftSide = leftSide + "<img src='imagenes/arbol/tvertline.gif'>" 
      this.isLastNode = 0 
    } 
  else 
    this.renderOb("") 
   
  if (nc > 0) 
  { 
    level = level + 1 
    for (i=0 ; i < this.nChildren; i++)  
    { 
      if (i == this.nChildren-1) 
        this.children[i].initialize(level, 1, leftSide) 
      else 
        this.children[i].initialize(level, 0, leftSide) 
      } 
  } 
} 
 
function drawFolder(leftSide) 
{ 
  if (browserVersion == 2) { 
    if (!doc.yPos) 
      doc.yPos=150
    doc.write("<layer id='folder" + this.id + "' top=" + doc.yPos + " left=10 visibility=inherit>") 
  } 
   
  doc.write("<table ") 
  if (browserVersion == 1) 
    doc.write(" id='folder" + this.id + "' style='position:block;' ") 
  doc.write(" border=0 cellspacing=0 cellpadding=0>") 

  doc.write("<tr><td width=20>&nbsp;</td><td>") 
  doc.write(leftSide) 
  this.outputLink() 
  doc.write("<img name='folderIcon" + this.id + "' ") 
  doc.write("src='../../gueb/eMiKi/MenuArbol/%22%20%2B%20this.iconSrc%2B%22' border=0></a>") 
  doc.write("</td><td valign=middle nowrap>") 
  if (USETEXTLINKS) 
  { 
    this.outputLink() 
    doc.write(this.desc + "</a>") 
  } 
  else 
    doc.write(this.desc) 
  doc.write("</td>")  
  doc.write("</table>") 
   
  if (browserVersion == 2) { 
    doc.write("</layer>") 
  } 
 
  if (browserVersion == 1) { 
    this.navObj = doc.all["folder"+this.id] 
    this.iconImg = doc.all["folderIcon"+this.id] 
    this.nodeImg = doc.all["nodeIcon"+this.id] 
  } else if (browserVersion == 2) { 
    this.navObj = doc.layers["folder"+this.id] 
    this.iconImg = this.navObj.document.images["folderIcon"+this.id] 
    this.nodeImg = this.navObj.document.images["nodeIcon"+this.id] 
    doc.yPos=doc.yPos+this.navObj.clip.height 
  } 
} 
 
function outputFolderLink() 
{ 
  if (this.hreference) 
  { 
    nc = this.nChildren
    doc.write("<a href=\"javascript:openWindow('" + this.hreference + "')\"") 
    if (browserVersion > 0) 
      if (nc)
       doc.write("onClick='javascript:clickOnFolder("+this.id+")'") 
    doc.write(">") 
  } 
  else 
    doc.write("<a>") 
//  doc.write("<a href='javascript:clickOnFolder("+this.id+")'>")   
} 
 
function addChild(childNode) 
{ 
  this.children[this.nChildren] = childNode 
  this.nChildren++ 
  return childNode 
} 
 
function folderSubEntries() 
{ 
  var i = 0 
  var se = this.nChildren 
 
  for (i=0; i < this.nChildren; i++){ 
    if (this.children[i].children) //is a folder 
      se = se + this.children[i].subEntries() 
  } 
 
  return se 
} 
 
 
// Definition of class Item (a document or link inside a Folder) 
// ************************************************************* 
 
function Item(itemDescription, itemLink) // Constructor 
{ 
  // constant data 
  this.desc = itemDescription 
  this.link = itemLink 
  this.id = -1 //initialized in initalize() 
  this.navObj = 0 //initialized in render() 
  this.iconImg = 0 //initialized in render() 
  this.iconSrc = "imagenes/arbol/tdoc.gif" 
 
  // methods 
  this.initialize = initializeItem 
  this.createIndex = createEntryIndex 
  this.hide = hideItem 
  this.display = display 
  this.renderOb = drawItem 
  this.totalHeight = totalHeight 
} 
 
function ItemExt(itemDescription, itemLink) // Constructor 
{ 
  // constant data 
  this.desc = itemDescription 
  this.link = itemLink 
  this.id = -1 //initialized in initalize() 
  this.navObj = 0 //initialized in render() 
  this.iconImg = 0 //initialized in render() 
  this.iconSrc = "imagenes/arbol/tlink.gif" 
 
  // methods 
  this.initialize = initializeItem 
  this.createIndex = createEntryIndex 
  this.hide = hideItem 
  this.display = display 
  this.renderOb = drawItem 
  this.totalHeight = totalHeight 
} 
function hideItem() 
{ 
  if (browserVersion == 1) { 
    if (this.navObj.style.display == "none") 
      return 
    this.navObj.style.display = "none" 
  } else { 
    if (this.navObj.visibility == "hiden") 
      return 
    this.navObj.visibility = "hiden" 
  }     
} 
 
function initializeItem(level, lastNode, leftSide) 
{  
  this.createIndex() 
 
  if (level>0) 
    if (lastNode) //the last 'brother' in the children array 
    { 
      this.renderOb(leftSide + "<img src='imagenes/arbol/tlastnode.gif'>") 
      leftSide = leftSide + "<img src='imagenes/arbol/tblank.gif'>"  
    } 
    else 
    { 
      this.renderOb(leftSide + "<img src='imagenes/arbol/tnode.gif'>") 
      leftSide = leftSide + "<img src='imagenes/arbol/tvertline.gif'>" 
    } 
  else 
    this.renderOb("")   
} 
 
function drawItem(leftSide) 
{ 
  if (browserVersion == 2) 
    doc.write("<layer id='item" + this.id + "' top=" + doc.yPos +  "  left=10 visibility=inherit>") 
     
  doc.write("<table ") 
  if (browserVersion == 1) 
    doc.write(" id='item" + this.id + "' style='position:block;' ") 
  doc.write(" border=0 cellspacing=0 cellpadding=0>") 
  doc.write("<tr><td width=20>&nbsp;</td><td>") 
  doc.write(leftSide) 
  doc.write("<a href=" + this.link + ">") 
  doc.write("<img id='itemIcon"+this.id+"' ") 
  doc.write("src='../../gueb/eMiKi/MenuArbol/%22%2Bthis.iconSrc%2B%22' border=0>") 
  doc.write("</a>") 
  doc.write("</td><td valign=middle nowrap>") 
  if (USETEXTLINKS) 
    doc.write("<a href="../../gueb/eMiKi/MenuArbol/%20%2B%20this.link%20%2B%20">" + this.desc + "</a>") 
  else 
    doc.write(this.desc) 
  doc.write("</table>") 
   
  if (browserVersion == 2) 
    doc.write("</layer>") 
 
  if (browserVersion == 1) { 
    this.navObj = doc.all["item"+this.id] 
    this.iconImg = doc.all["itemIcon"+this.id] 
  } else if (browserVersion == 2) { 
    this.navObj = doc.layers["item"+this.id] 
    this.iconImg = this.navObj.document.images["itemIcon"+this.id] 
    doc.yPos=doc.yPos+this.navObj.clip.height 
  } 
} 
 
 
// Methods common to both objects (pseudo-inheritance) 
// ******************************************************** 
 
function display() 
{ 
  if (browserVersion == 1) 
    this.navObj.style.display = "block" 
  else 
    this.navObj.visibility = "show" 
} 
 
function createEntryIndex() 
{ 
  this.id = nEntries 
  indexOfEntries[nEntries] = this 
  nEntries++ 
} 
 
// total height of subEntries open 
function totalHeight() //used with browserVersion == 2 
{ 
  var h = this.navObj.clip.height 
  var i = 0 
   
  if (this.isOpen) //is a folder and _is_ open 
    for (i=0 ; i < this.nChildren; i++)  
      h = h + this.children[i].totalHeight() 
 
  return h 
} 
 
 
// Events 
// ********************************************************* 
 
function clickOnFolder(folderId) 
{ 
  var clicked = indexOfEntries[folderId] 
 
  if (!clicked.isOpen) 
    clickOnNode(folderId) 
 
  return  
 
  if (clicked.isSelected) 
    return 
} 
 
function clickOnNode(folderId) 
{ 
  var clickedFolder = 0 
  var state = 0 
  clickedFolder = indexOfEntries[folderId] 
  state = clickedFolder.isOpen 
  clickedFolder.setState(!state) //open<->close  
} 

function expandTree() 
{  
  for (i=0;indexOfEntries[i];i++)
  {
  	if (indexOfEntries[i].nChildren)
	{
		indexOfEntries[i].setState(1)	
	}
  }
} 

function colapseTree() 
{  
  for (i=0;indexOfEntries[i];i++)
  {
  	if (indexOfEntries[i].nChildren)
	{
		indexOfEntries[i].setState(0)	
	}
  }
  clickOnNode(0)
} 
 
function initializeDocument() 
{ 
  if (doc.all) 
    browserVersion = 1 //IE4   
  else 
    if (doc.layers) 
      browserVersion = 2 //NS4 
    else 
      browserVersion = 0 //other 
 
  foldersTree.initialize(0, 1, "") 
  foldersTree.display()
  
  if (browserVersion > 0) 
  { 
    doc.write("<layer top="+indexOfEntries[nEntries-1].navObj.top+" visibility=inherit> </layer>") 
 
    // close the whole tree 
    clickOnNode(0) 
    // open the root folder 
//    expandTree()
colapseTree()
  } 
} 

 function openWindow(url) {
  hlpWindow = window.open(url,'_blank','toolbar=1,location=1,directories=0,status=1,menubar=1,scrollbars=1,resizable=1,copyhistory=0,width=700,height=400');
 } 

 function openWinRg(url) {
  hlpWindow = window.open(url,'right','');
 } 
 
 function openWinTop(url) {
  hlpWindow = window.open(url,'_top','');
 } 

// Auxiliary Functions for Folder-Treee backward compatibility 
// ********************************************************* 
 
function gFld(description, hreference) 
{ 

  folder = new Folder(description, hreference) 
  return folder 
} 
 
function gLnk(linkData, description) 
{ 
  fullLink = "" 
  fullLink = "javascript:openWinRg('"+linkData+"')" 
  linkItem = new Item(description, fullLink)   
  return linkItem 
} 

function gLnkExt(linkData,description ) 
{ 
  fullLink = "" 
  fullLink = "javascript:openWindow('"+linkData+"')" 
  linkItem = new ItemExt(description, fullLink)   
  return linkItem 
} 
 
function gLnkTop(linkData,description ) 
{ 
  fullLink = "" 
  fullLink = "javascript:openWinTop('"+linkData+"')" 
  linkItem = new ItemExt(description, fullLink)   
  return linkItem 
} 

function insFld(parentFolder, childFolder) 
{ 
  return parentFolder.addChild(childFolder) 
} 
 
function insDoc(parentFolder, document) 
{ 
  parentFolder.addChild(document) 
} 

function drawFooter(idioma) 
{ 
  this.iconSrc = "imagenes/arbol/indice.gif"

  if (browserVersion == 2) { 
     doc.yPos= 150 + (document.layers.length * document.layers["folder0"].clip.height)
    doc.write("<layer id=\"footer\" top=" + doc.yPos + " visibility=inherit>") 
  } 
 
    doc.write("<hr>")
    doc.write("<table width=100%>")
    doc.write("<tr>")
    doc.write("<td align=left><font face=arial color=#ffff00 size=2>CoordinA<font color=#ff0000>4</font></font></td>")
    doc.write("<td align=right><a href='/cgi-bin/navega.exe?H&" +idioma+ "'><img src='../../gueb/eMiKi/MenuArbol/%22%2Bthis.iconSrc%2B%22' border=0></a></td>")
    doc.write("</tr>")
    doc.write("</table>")   
   
  if (browserVersion == 2) { 
    doc.write("</layer>") 
  } 
}  
// Global variables 
// **************** 
 
USETEXTLINKS = 1
indexOfEntries = new Array 
nEntries = 0 
doc = document 
ttotal = 0
browserVersion = 0 
selectedFolder=0
