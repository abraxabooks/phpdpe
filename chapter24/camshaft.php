<?php
class Camshaft implements Visitable {
	public function acceptEngineVisitor(EngineVisitor $visitor) {
		$visitor->visitCamshaft($this);
	}
}
?>