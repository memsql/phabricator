<?php

/**
 * @group conduit
 *
 * super hacky hack
 *
 * hack
 *
 * queries transaction comments
 *
 * @concrete-extensible
 */
class ConduitAPI_maniphest_querypsyduckcomments_Method
  extends ConduitAPI_maniphest_Method {


  public function getMethodDescription() {
    return "Find all open Maniphest comments referencing Psyduck.";
  }

  public function defineParamTypes() {
    return array(
    );
  }

  public function defineReturnType() {
    return 'list';
  }

  public function defineErrorTypes() {
    return array(
    );
  }

  protected function execute(ConduitAPIRequest $request) {
    return id(new ManiphestPsyduckCommentQuery())
      ->execute();
  }
}
