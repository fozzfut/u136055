{"version":3,"file":"script.min.js","sources":["script.js"],"names":["delegatePopup","delegateUser","tasksTaskDetailDefaultTemplateInit","BX","bind","ToggleSwitcher","AddElaplsedTime","SendElaplsedTime","CancelElaplsedTime","tasksDetailsNS","changeTaskGroup","elapsedInputs","getElementsByTagName","i","length","e","window","event","keyCode","submit","this","form","PreventDefault","subTaskBlock","type","isElementNode","style","display","addCustomEvent","taskGroupPopup","deleteFile","fileId","taskId","linkId","oRemoveBtn","confirm","message","ajax","post","sessid","datum","textDecoration","remove","loadCommentsComponent","targetDomNode","forumId","PATH_TO_USER_PROFILE","ITEM_DETAIL_COUNT","PATH_TO_FORUM_SMILE","SHOW_RATING","RATING_TYPE","tasksDetailPartsNS","detailsAjaxUrl","NAME_TEMPLATE","TASK_ID","data","innerHTML","loadGroupSelectorViaAjax","params","onload","backupText","text","adjust","Tasks","lwPopup","__initSelectors","requestedObject","bindElement","callbackOnSelect","arGroups","onTaskGroupSelect","onLoadedViaAjax","jsObjectName","wait","delay","timeout","setTimeout","groupId","value","select","id","title","show","clearGroup","deleteIcon","cleanNode","deselect","saveGroup","mode","detailTaksID","path_to_user","path_to_task","path_to_user_tasks_task","ajaxUrl","groups","onInit","findChild","parentNode","tag","className","create","props","appendChild","events","click","hasClass","tabs","block","switcher","addClass","removeClass","GetNumericCase","number","nominative","genitiveCase","prepositional","parseInt","isNaN","ChangeTaskUsers","replace","AddTaskUsers","ShowDeclinePopup","TaskDeclinePopup","offsetTop","onPopupChange","method","action","postFormAction","children","name","textarea","document","body","ShowTemplatesPopup","popup","PopupWindowManager","autoHide","onPopupClose","__onTemplatesPopupClose","content","SetReport","flag","toggleClass","report","SaveTags","tags","tagsString","GoToComment","link","toggle","proxy","lastRow","MoveForm","toRow","nextRow","findNextSibling","insertBefore","ShowElapsedForm","hours","minutes","comment","seconds","elements","focus","EditElapsedTime","unbind","ShowNewTaskMenu","button","menu","TaskMenuPopup","offsetLeft"],"mappings":"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"}