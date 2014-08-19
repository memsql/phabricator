<?php

/**
 * Query comments by hardcoded criteria.
 *
 * super hacky hack
 *
 * hack
 *
 * @group maniphest
 */
final class ManiphestPsyduckCommentQuery
  extends PhabricatorQuery {

  public function execute() {

    $dao = new ManiphestTransactionComment();
    $conn = $dao->establishConnection('r');

    $conn->executeRawQuery(
        'SELECT comment.phid, comment.content FROM maniphest_task task, maniphest_transaction transaction, maniphest_transaction_comment comment WHERE task.status = 0 AND task.phid = transaction.objectPHID AND transaction.commentPHID = comment.phid AND comment.content LIKE "%psyduck.memcompute.com%"'
    );

    $rows = $conn->selectAllResults();

    return $rows;
  }
}
