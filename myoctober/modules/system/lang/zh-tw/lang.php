<?php return [
  'app' => [
    'name' => 'October CMS',
    'tagline' => '登入',
  ],
  'directory' => [
    'create_fail' => '不能建立目錄: :name',
  ],
  'file' => [
    'create_fail' => '不能建立檔案: :name',
  ],
  'combiner' => [
    'not_found' => '混合檔案 \':name\' 沒找到.',
  ],
  'system' => [
    'name' => '系統',
    'menu_label' => '系統',
    'categories' => [
      'cms' => '內容管理',
      'misc' => '雜項',
      'logs' => '日誌',
      'mail' => '郵件',
      'shop' => '商舖',
      'team' => '團隊',
      'users' => '使用者',
      'system' => '系統',
      'social' => '社交',
      'events' => '事件',
      'customers' => '自訂',
      'my_settings' => '我的設定',
    ],
  ],
  'theme' => [
    'unnamed' => '未命名主題',
    'name' => [
      'label' => '主題名稱',
      'help' => '主題的唯一名稱，例如：RainLab.Vanilla',
    ],
  ],
  'themes' => [
    'install' => '安裝主題',
    'search' => '搜尋主題...',
    'installed' => '已安裝主題',
    'no_themes' => '市集上沒有已安裝的主題。',
    'recommended' => '推薦',
    'remove_confirm' => '您確定要刪除這些主題嗎？',
  ],
  'plugin' => [
    'unnamed' => '未命名的外掛',
    'name' => [
      'label' => '外掛名稱',
      'help' => '外掛的唯一名稱，例如：RainLab.Blog',
    ],
  ],
  'plugins' => [
    'enable_or_disable' => '啟用或停用',
    'enable_or_disable_title' => '啟用或停用外掛',
    'install' => '安裝外掛',
    'install_products' => '安裝產品',
    'search' => '搜尋外掛...',
    'installed' => '已安裝外掛',
    'no_plugins' => '市集中沒有已安裝的外掛。',
    'recommended' => '推薦',
    'remove' => '移除',
    'refresh' => '更新',
    'disabled_label' => '停用',
    'disabled_help' => '被停用的外掛被應用程式忽略了.',
    'selected_amount' => '選取的外掛: :數目',
    'remove_confirm' => '您確定嗎?',
    'remove_success' => '成功從系統移除這些外掛.',
    'refresh_confirm' => '您確定嗎?',
    'refresh_success' => '成功更新了系統中的外掛.',
    'disable_confirm' => '您確定嗎?',
    'disable_success' => '成功停用了這些外掛.',
    'enable_success' => '成功啟用了這些外掛',
    'unknown_plugin' => '外掛從檔案系統中移除了.',
  ],
  'project' => [
    'attach' => '增加產品',
    'detach' => '刪除產品',
    'none' => '沒有',
    'id' => [
      'missing' => '請確認您想使用的產品ID.',
    ],
    'detach_confirm' => '您確定要刪除這個產品嗎?',
    'unbind_success' => '產品刪除成功.',
  ],
  'settings' => [
    'search' => '搜尋',
  ],
  'mail' => [
    'smtp_ssl' => '需要SSL連接',
  ],
  'mail_templates' => [
    'name_comment' => '指向這個模板的唯一名稱',
    'test_send' => '發送測試訊息',
    'return' => '返回模板列表',
  ],
  'install' => [
    'plugin_label' => '安裝外掛',
    'theme_label' => '安裝主題',
  ],
  'updates' => [
    'plugin_author' => '作者',
    'plugin_not_found' => 'Plugin not found',
    'core_build' => '版本 :build',
    'core_build_help' => '新的版本可用.',
    'themes' => '主題',
    'plugin_version_none' => '新外掛',
    'theme_new_install' => '新主題安裝.',
    'theme_extracting' => '解壓縮主題: :name',
    'update_label' => '更新軟件',
    'update_loading' => '加載可用更新...',
    'force_label' => '強制更新',
    'found' => [
      'label' => '發現新的更新!',
      'help' => '點選更新.',
    ],
    'none' => [
      'label' => '沒有更新',
      'help' => '沒有發現新的更新.',
    ],
  ],
  'server' => [
    'connect_error' => '連接伺服器失敗.',
    'response_not_found' => '找不到更新伺服器.',
    'response_invalid' => '伺服器返回異常.',
    'response_empty' => '伺服器返回為空.',
    'file_error' => '伺服器下載檔案失敗.',
    'file_corrupt' => '伺服器下載檔案校驗失敗.',
  ],
  'behavior' => [
    'missing_property' => 'Class :class 必須定義屬性 $:property 被 :behavior behavior 使用.',
  ],
  'config' => [
    'not_found' => '不能搜尋設定檔案 :file 為 :location 定義.',
    'required' => '設定 :location 必須有 \':property\'.',
  ],
  'zip' => [
    'extract_failed' => '不能解壓縮檔案 \':file\'.',
  ],
  'event_log' => [],
  'request_log' => [
    'empty_link' => '清空請求日誌',
    'empty_loading' => '清空請求日誌...',
    'empty_success' => '成功清空請求日誌.',
    'return_link' => '返回請求日誌',
    'id' => 'ID',
  ],
  'permissions' => [
    'name' => '系統',
    'manage_system_settings' => '管理系統設定',
    'manage_software_updates' => '管理軟件更新',
    'access_logs' => '查看訪問日誌',
    'manage_mail_templates' => '管理郵件模板',
    'manage_mail_settings' => '管理郵件設定',
    'manage_other_administrators' => '管理其他管理員',
  ],
  'media' => [
    'invalid_path' => '不合法的路徑: \':path\'.',
    'folder_size_items' => '個數',
  ],
];
