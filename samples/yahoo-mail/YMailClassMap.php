<?php
/**
 * ClassMap 
 * @date 02/07/2012
 */
/**
 * ClassMap
 * @date 02/07/2012
 */
class YMailClassMap
{
	final public static function classMap()
	{
		return array (
  'GetUserData' => 'YMailTypeGetUserData',
  'GetUserDataResponse' => 'YMailTypeGetUserDataResponse',
  'SetUserData' => 'YMailTypeSetUserData',
  'SetUserDataResponse' => 'YMailTypeSetUserDataResponse',
  'ListFolders' => 'YMailTypeListFolders',
  'ListFoldersResponse' => 'YMailTypeListFoldersResponse',
  'CreateFolder' => 'YMailTypeCreateFolder',
  'CreateFolderResponse' => 'YMailTypeCreateFolderResponse',
  'RemoveFolder' => 'YMailTypeRemoveFolder',
  'RemoveFolderResponse' => 'YMailTypeRemoveFolderResponse',
  'RenameFolder' => 'YMailTypeRenameFolder',
  'RenameFolderResponse' => 'YMailTypeRenameFolderResponse',
  'EmptyFolder' => 'YMailTypeEmptyFolder',
  'EmptyFolderResponse' => 'YMailTypeEmptyFolderResponse',
  'ListMessages' => 'YMailTypeListMessages',
  'ListMessagesResponse' => 'YMailTypeListMessagesResponse',
  'ListMessagesFromIds' => 'YMailTypeListMessagesFromIds',
  'ListMessagesFromIdsResponse' => 'YMailTypeListMessagesFromIdsResponse',
  'GetMessage' => 'YMailTypeGetMessage',
  'MidRequest' => 'YMailTypeMidRequest',
  'GetMessageResponse' => 'YMailTypeGetMessageResponse',
  'SaveRawMessage' => 'YMailTypeSaveRawMessage',
  'SaveRawMessageResponse' => 'YMailTypeSaveRawMessageResponse',
  'DeleteMessages' => 'YMailTypeDeleteMessages',
  'DeleteMessagesResponse' => 'YMailTypeDeleteMessagesResponse',
  'MoveMessages' => 'YMailTypeMoveMessages',
  'MoveMessagesResponse' => 'YMailTypeMoveMessagesResponse',
  'FlagMessages' => 'YMailTypeFlagMessages',
  'FlagMessagesResponse' => 'YMailTypeFlagMessagesResponse',
  'GetMessageRawHeader' => 'YMailTypeGetMessageRawHeader',
  'GetMessageRawHeaderResponse' => 'YMailTypeGetMessageRawHeaderResponse',
  'FetchExternalMail' => 'YMailTypeFetchExternalMail',
  'FetchExternalMailResponse' => 'YMailTypeFetchExternalMailResponse',
  'SendMessage' => 'YMailTypeSendMessage',
  'SendMessageResponse' => 'YMailTypeSendMessageResponse',
  'SaveMessage' => 'YMailTypeSaveMessage',
  'SaveMessageResponse' => 'YMailTypeSaveMessageResponse',
  'ResetSpamFilter' => 'YMailTypeResetSpamFilter',
  'ResetSpamFilterResponse' => 'YMailTypeResetSpamFilterResponse',
  'BatchExecute' => 'YMailTypeBatchExecute',
  'BatchExecuteResponse' => 'YMailTypeBatchExecuteResponse',
  'SearchMessages' => 'YMailTypeSearchMessages',
  'BatchParameter' => 'YMailTypeBatchParameter',
  'BatchCall' => 'YMailTypeBatchCall',
  'BatchResponse' => 'YMailTypeBatchResponse',
  'ErrorResponse' => 'YMailTypeErrorResponse',
  'ExternalAccount' => 'YMailTypeExternalAccount',
  'FetchResult' => 'YMailTypeFetchResult',
  'Fid' => 'YMailTypeFid',
  'FolderData' => 'YMailTypeFolderData',
  'InboxServices' => 'YMailTypeInboxServices',
  'MessageInfo' => 'YMailTypeMessageInfo',
  'SearchInfo' => 'YMailTypeSearchInfo',
  'SearchAttachmentInfo' => 'YMailTypeSearchAttachmentInfo',
  'Flag' => 'YMailTypeFlag',
  'SetFlag' => 'YMailTypeSetFlag',
  'Address' => 'YMailTypeAddress',
  'ComposeAddress' => 'YMailTypeComposeAddress',
  'Message' => 'YMailTypeMessage',
  'ComposeMessage' => 'YMailTypeComposeMessage',
  'ComposeMessagePart' => 'YMailTypeComposeMessagePart',
  'SimpleMessageBody' => 'YMailTypeSimpleMessageBody',
  'ComposeAttachment' => 'YMailTypeComposeAttachment',
  'SaveMessageDestination' => 'YMailTypeSaveMessageDestination',
  'AttachmentInfo' => 'YMailTypeAttachmentInfo',
  'MessagePart' => 'YMailTypeMessagePart',
  'MessageHeaderInfo' => 'YMailTypeMessageHeaderInfo',
  'ErrorCode' => 'YMailTypeErrorCode',
  'Header' => 'YMailTypeHeader',
  'SearchQuery' => 'YMailTypeSearchQuery',
  'UserData' => 'YMailTypeUserData',
  'UserFeaturePref' => 'YMailTypeUserFeaturePref',
  'UserUIPref' => 'YMailTypeUserUIPref',
  'UserSpamPref' => 'YMailTypeUserSpamPref',
  'UserVacationPref' => 'YMailTypeUserVacationPref',
  'UserSendPref' => 'YMailTypeUserSendPref',
  'UserPopPref' => 'YMailTypeUserPopPref',
  'Switches' => 'YMailTypeSwitches',
  'ParentalControls' => 'YMailTypeParentalControls',
  'Filters' => 'YMailTypeFilters',
  'SetData' => 'YMailTypeSetData',
  'SetFeaturePref' => 'YMailTypeSetFeaturePref',
  'SetUIPref' => 'YMailTypeSetUIPref',
  'SetSpamPref' => 'YMailTypeSetSpamPref',
  'SetVacationPref' => 'YMailTypeSetVacationPref',
  'SetSendPref' => 'YMailTypeSetSendPref',
  'SetPopPref' => 'YMailTypeSetPopPref',
  'SetSwitches' => 'YMailTypeSetSwitches',
  'AllExternalAccounts' => 'YMailTypeAllExternalAccounts',
  'AllDisposableAddresses' => 'YMailTypeAllDisposableAddresses',
  'AllAliases' => 'YMailTypeAllAliases',
  'AllOtherYahooMboxes' => 'YMailTypeAllOtherYahooMboxes',
  'BlockedAddresses' => 'YMailTypeBlockedAddresses',
  'SetBlockedAddresses' => 'YMailTypeSetBlockedAddresses',
  'ExternalAccountAlias' => 'YMailTypeExternalAccountAlias',
  'DisposableAddress' => 'YMailTypeDisposableAddress',
  'Alias' => 'YMailTypeAlias',
  'YahooMbox' => 'YMailTypeYahooMbox',
  'MetaData' => 'YMailTypeMetaData',
  'SearchDateRange' => 'YMailTypeSearchDateRange',
  'HumanVerification' => 'YMailTypeHumanVerification',
  'SortKey' => 'YMailTypeSortKey',
  'SearchDateCheck' => 'YMailTypeSearchDateCheck',
  'SearchMatchMode' => 'YMailTypeSearchMatchMode',
  'SearchRecipientMode' => 'YMailTypeSearchRecipientMode',
  'SearchType' => 'YMailTypeSearchType',
  'SearchAttachmentType' => 'YMailTypeSearchAttachmentType',
  'SearchSizeCheck' => 'YMailTypeSearchSizeCheck',
  'SearchWordBounds' => 'YMailTypeSearchWordBounds',
  'SortOrder' => 'YMailTypeSortOrder',
  'OffsetType' => 'YMailTypeOffsetType',
  'DateType' => 'YMailTypeDateType',
  'MidLocationRes' => 'YMailTypeMidLocationRes',
  'GroupBy' => 'YMailTypeGroupBy',
  'FetchStatus' => 'YMailTypeFetchStatus',
  'ShowCcBcc' => 'YMailTypeShowCcBcc',
  'UseRichText' => 'YMailTypeUseRichText',
  'IncludeMsgOnReply' => 'YMailTypeIncludeMsgOnReply',
  'RichTextSignature' => 'YMailTypeRichTextSignature',
  'UnknownContactAction' => 'YMailTypeUnknownContactAction',
  'ImageBlockOption' => 'YMailTypeImageBlockOption',
);
	}
}
?>