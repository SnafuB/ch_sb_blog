<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Dawin.' . $_EXTKEY,
	'Pi1',
	'Blog'
);

$pluginSignature = str_replace('_','',$_EXTKEY) . '_pi1';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_pi1.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Blog Christophe & Stéphane');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_chsbblog_domain_model_post', 'EXT:ch_sb_blog/Resources/Private/Language/locallang_csh_tx_chsbblog_domain_model_post.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_chsbblog_domain_model_post');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_chsbblog_domain_model_author', 'EXT:ch_sb_blog/Resources/Private/Language/locallang_csh_tx_chsbblog_domain_model_author.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_chsbblog_domain_model_author');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_chsbblog_domain_model_tag', 'EXT:ch_sb_blog/Resources/Private/Language/locallang_csh_tx_chsbblog_domain_model_tag.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_chsbblog_domain_model_tag');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_chsbblog_domain_model_category', 'EXT:ch_sb_blog/Resources/Private/Language/locallang_csh_tx_chsbblog_domain_model_category.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_chsbblog_domain_model_category');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_chsbblog_domain_model_comment', 'EXT:ch_sb_blog/Resources/Private/Language/locallang_csh_tx_chsbblog_domain_model_comment.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_chsbblog_domain_model_comment');
