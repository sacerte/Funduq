<?php
/**
* @author Sacerte
* @brief Aprobar comentarios
**/
		$cat = CommentData::getById($_GET["id"]);
		$cat->unaprove();
		Core::redir("./?view=comments");
?>