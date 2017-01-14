<?php

final class ManiphestTaskEditController extends ManiphestController {

  public function handleRequest(AphrontRequest $request) {
    if (!$request->isAjax()) {
        header("Location: https://memsql.atlassian.net/secure/CreateIssue.jspa?pid=11200&issuetype=10005");
        exit();
    }

    return id(new ManiphestEditEngine())
      ->setController($this)
      ->addContextParameter('ungrippable')
      ->addContextParameter('responseType')
      ->addContextParameter('columnPHID')
      ->addContextParameter('order')
      ->buildResponse();
  }

}
