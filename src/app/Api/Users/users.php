<?php
    if (strpos($getText, '/start') === 0) {
        $text = 'سلام!
        این ربات توسط تیم --پیمان پلاس پلاس-- نوشته شده است';
    }

    $telegramApi->sendMessage($text);


    /*
در نوشتن کامیت‌ها، استفاده از قالب‌های استاندارد می‌تواند به سازماندهی و وضوح بیشتر کمک کند. در زیر برخی از قالب‌های استاندارد متداول برای نوشتن پیام‌های کامیت آورده شده است:

### ۱. feat: 
- برای اضافه کردن ویژگی جدید به برنامه.
  - مثال: feat: اضافه کردن قابلیت جستجو

### ۲. fix: 
- برای اصلاح باگ‌ها یا مشکلات.
  - مثال: fix: رفع مشکل در بارگذاری صفحه

### ۳. docs: 
- برای تغییرات در مستندات.
  - مثال: docs: به‌روزرسانی مستندات API

### ۴. style: 
- برای تغییرات ظاهری (فرمت‌بندی، فاصله‌ها، و غیره) که بر عملکرد کد تأثیری ندارند.
  - مثال: style: اصلاح فرمت کد

### ۵. refactor: 
- برای بازنویسی کد بدون تغییر در عملکرد.
  - مثال: refactor: بهینه‌سازی تابع محاسبه

### ۶. perf: 
- برای بهبود عملکرد.
  - مثال: perf: افزایش سرعت بارگذاری صفحه

### ۷. test: 
- برای اضافه کردن یا اصلاح تست‌ها.
  - مثال: test: اضافه کردن تست‌های واحد برای تابع جدید

### ۸. chore: 
- برای تغییرات جزئی و کارهای روزمره که به کد اصلی مربوط نمی‌شوند (مانند به‌روزرسانی وابستگی‌ها).
  - مثال: chore: به‌روزرسانی وابستگی‌های npm

### ۹. build: 
- برای تغییرات در سیستم ساخت (build system) یا وابستگی‌ها.
  - مثال: build: تغییرات در فایل webpack.config.js

### ۱۰. ci: 
- برای تغییرات در پیکربندی CI/CD (ادغام مداوم/تحویل مداوم).
  - مثال: ci: به‌روزرسانی پیکربندی Travis CI

### ۱۱. revert: 
- برای بازگشت به یک کامیت قبلی.
  - مثال: revert: بازگشت به کامیت 1234567

    */