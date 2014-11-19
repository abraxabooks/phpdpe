<?php
interface Visitable {
	public function acceptEngineVisitor(EngineVisitor $visitor);
}
?>