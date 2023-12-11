@extends('layouts.user-layout')

@section('content')
<div class="min-w-full px-4 mb-5">

    <span class="toggle-button text-white text-4xl top-5 left-4 cursor-pointer xl:hidden">
        <img src="{{ asset('images/tonggle_sidebar.svg') }}">
    </span>

    <div class="items-center justify-between mt-5 flex">
        <div class="flex items-center justify-start">
            <p class="font-semibold text-3xl md:text-[40px] text-[#416D14]">Pertinjau</p>
        </div>
        <div class="flex items-center justify-end">
            <div class="relative w-[124px] h-[25px] ">
                <select id="filter" name="filter" class="block appearance-none w-full bg-[#416D14] border border-gray-300 text-white py-1 px-1 rounded-lg leading-tight focus:outline-none focus:border-blue-500 text-center text-xs font-semibold">
                    <option value="L001">L001</option>
                    <option value="L002">L002</option>
                    <option value="L003">L003</option>
                    <option value="L004">L004</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-white">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M5 8l5 5 5-5z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!--Item-->
    <div class="flex items-center bg-slate-200 ps-[13px] pe-[15px] py-6 rounded-[20px] mt-7 md:mt-7 md:flex">
        <div class="flex-none me-[14px] w-[75px] h-[75px] md:w-[141px] md:h-[141px] lg:mx-16">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 141 141" fill="none">
                <path d="M88.125 17.625H118.969V26.4375H88.125V17.625ZM88.125 44.0625H132.188V52.875H88.125V44.0625ZM88.125 70.5H118.969V79.3125H88.125V70.5ZM52.875 101.344C52.875 104.85 51.4823 108.212 49.0033 110.691C46.5243 113.17 43.1621 114.562 39.6562 114.562C36.1504 114.562 32.7882 113.17 30.3092 110.691C27.8302 108.212 26.4375 104.85 26.4375 101.344H52.875Z" fill="#86A169" />
                <path d="M132.187 96.9375H70.1475C69.2107 90.4733 66.2489 84.4724 61.6875 79.7972V30.8438C61.6875 25.0007 59.3664 19.397 55.2347 15.2653C51.103 11.1336 45.4993 8.8125 39.6562 8.8125C33.8132 8.8125 28.2095 11.1336 24.0778 15.2653C19.9461 19.397 17.625 25.0007 17.625 30.8438V79.7972C14.2166 83.2752 11.6809 87.5114 10.2255 92.1585C8.77017 96.8056 8.43666 101.731 9.2523 106.532C10.0679 111.333 12.0095 115.873 14.918 119.778C17.8264 123.684 21.6189 126.845 25.9847 129.002C30.3505 131.159 35.1653 132.252 40.0345 132.189C44.9038 132.126 49.689 130.911 53.9979 128.642C58.3068 126.374 62.0168 123.116 64.824 119.137C67.6311 115.158 69.4555 110.57 70.1475 105.75H132.187V96.9375ZM39.6562 123.375C35.196 123.381 30.8391 122.032 27.1633 119.506C23.4875 116.979 20.6664 113.395 19.074 109.229C17.4816 105.063 17.1932 100.511 18.247 96.1767C19.3008 91.8427 21.6471 87.9314 24.9746 84.9613L26.4375 83.6438V30.8438C26.4375 27.3379 27.8302 23.9757 30.3092 21.4967C32.7882 19.0177 36.1504 17.625 39.6562 17.625C43.1621 17.625 46.5243 19.0177 49.0033 21.4967C51.4823 23.9757 52.875 27.3379 52.875 30.8438V83.6438L54.3379 84.9613C57.6654 87.9314 60.0117 91.8427 61.0655 96.1767C62.1193 100.511 61.8309 105.063 60.2385 109.229C58.6461 113.395 55.825 116.979 52.1492 119.506C48.4734 122.032 44.1165 123.381 39.6562 123.375Z" fill="#416D14" fill-opacity="0.56" />
            </svg>
        </div>
        <div class="flex-col flex-1 md:flex md:flex-row justify-between lg:px-11">
            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>
        </div>
    </div>
    <!--Close Item-->

    <!--Item-->
    <div class="flex items-center bg-slate-200 ps-[13px] pe-[15px] py-6 rounded-[20px] mt-7 md:mt-7  md:flex">
        <div class="flex-none me-[14px] w-[75px] h-[75px] md:w-[141px] md:h-[141px] lg:mx-16">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 141 141" fill="none">
                <path d="M88.125 17.625H118.969V26.4375H88.125V17.625ZM88.125 44.0625H132.188V52.875H88.125V44.0625ZM88.125 70.5H118.969V79.3125H88.125V70.5ZM52.875 101.344C52.875 104.85 51.4823 108.212 49.0033 110.691C46.5243 113.17 43.1621 114.562 39.6562 114.562C36.1504 114.562 32.7882 113.17 30.3092 110.691C27.8302 108.212 26.4375 104.85 26.4375 101.344H52.875Z" fill="#86A169" />
                <path d="M132.187 96.9375H70.1475C69.2107 90.4733 66.2489 84.4724 61.6875 79.7972V30.8438C61.6875 25.0007 59.3664 19.397 55.2347 15.2653C51.103 11.1336 45.4993 8.8125 39.6562 8.8125C33.8132 8.8125 28.2095 11.1336 24.0778 15.2653C19.9461 19.397 17.625 25.0007 17.625 30.8438V79.7972C14.2166 83.2752 11.6809 87.5114 10.2255 92.1585C8.77017 96.8056 8.43666 101.731 9.2523 106.532C10.0679 111.333 12.0095 115.873 14.918 119.778C17.8264 123.684 21.6189 126.845 25.9847 129.002C30.3505 131.159 35.1653 132.252 40.0345 132.189C44.9038 132.126 49.689 130.911 53.9979 128.642C58.3068 126.374 62.0168 123.116 64.824 119.137C67.6311 115.158 69.4555 110.57 70.1475 105.75H132.187V96.9375ZM39.6562 123.375C35.196 123.381 30.8391 122.032 27.1633 119.506C23.4875 116.979 20.6664 113.395 19.074 109.229C17.4816 105.063 17.1932 100.511 18.247 96.1767C19.3008 91.8427 21.6471 87.9314 24.9746 84.9613L26.4375 83.6438V30.8438C26.4375 27.3379 27.8302 23.9757 30.3092 21.4967C32.7882 19.0177 36.1504 17.625 39.6562 17.625C43.1621 17.625 46.5243 19.0177 49.0033 21.4967C51.4823 23.9757 52.875 27.3379 52.875 30.8438V83.6438L54.3379 84.9613C57.6654 87.9314 60.0117 91.8427 61.0655 96.1767C62.1193 100.511 61.8309 105.063 60.2385 109.229C58.6461 113.395 55.825 116.979 52.1492 119.506C48.4734 122.032 44.1165 123.381 39.6562 123.375Z" fill="#416D14" fill-opacity="0.56" />
            </svg>
        </div>
        <div class="flex-col flex-1 md:flex md:flex-row justify-between lg:px-11">
            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>
        </div>
    </div>
    <!--Close Item-->

    <!--Item-->
    <div class="flex items-center bg-slate-200 ps-[13px] pe-[15px] py-6 rounded-[20px] mt-7 md:mt-7 md:flex">
        <div class="flex-none me-[14px] w-[75px] h-[75px] md:w-[141px] md:h-[141px] lg:mx-16">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 141 141" fill="none">
                <path d="M88.125 17.625H118.969V26.4375H88.125V17.625ZM88.125 44.0625H132.188V52.875H88.125V44.0625ZM88.125 70.5H118.969V79.3125H88.125V70.5ZM52.875 101.344C52.875 104.85 51.4823 108.212 49.0033 110.691C46.5243 113.17 43.1621 114.562 39.6562 114.562C36.1504 114.562 32.7882 113.17 30.3092 110.691C27.8302 108.212 26.4375 104.85 26.4375 101.344H52.875Z" fill="#86A169" />
                <path d="M132.187 96.9375H70.1475C69.2107 90.4733 66.2489 84.4724 61.6875 79.7972V30.8438C61.6875 25.0007 59.3664 19.397 55.2347 15.2653C51.103 11.1336 45.4993 8.8125 39.6562 8.8125C33.8132 8.8125 28.2095 11.1336 24.0778 15.2653C19.9461 19.397 17.625 25.0007 17.625 30.8438V79.7972C14.2166 83.2752 11.6809 87.5114 10.2255 92.1585C8.77017 96.8056 8.43666 101.731 9.2523 106.532C10.0679 111.333 12.0095 115.873 14.918 119.778C17.8264 123.684 21.6189 126.845 25.9847 129.002C30.3505 131.159 35.1653 132.252 40.0345 132.189C44.9038 132.126 49.689 130.911 53.9979 128.642C58.3068 126.374 62.0168 123.116 64.824 119.137C67.6311 115.158 69.4555 110.57 70.1475 105.75H132.187V96.9375ZM39.6562 123.375C35.196 123.381 30.8391 122.032 27.1633 119.506C23.4875 116.979 20.6664 113.395 19.074 109.229C17.4816 105.063 17.1932 100.511 18.247 96.1767C19.3008 91.8427 21.6471 87.9314 24.9746 84.9613L26.4375 83.6438V30.8438C26.4375 27.3379 27.8302 23.9757 30.3092 21.4967C32.7882 19.0177 36.1504 17.625 39.6562 17.625C43.1621 17.625 46.5243 19.0177 49.0033 21.4967C51.4823 23.9757 52.875 27.3379 52.875 30.8438V83.6438L54.3379 84.9613C57.6654 87.9314 60.0117 91.8427 61.0655 96.1767C62.1193 100.511 61.8309 105.063 60.2385 109.229C58.6461 113.395 55.825 116.979 52.1492 119.506C48.4734 122.032 44.1165 123.381 39.6562 123.375Z" fill="#416D14" fill-opacity="0.56" />
            </svg>
        </div>
        <div class="flex-col flex-1 md:flex md:flex-row justify-between lg:px-11">
            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>
        </div>
    </div>
    <!--Close Item-->

    <!--Item-->
    <div class="flex items-center bg-slate-200 ps-[13px] pe-[15px] py-6 rounded-[20px] mt-7 md:mt-7 md:flex">
        <div class="flex-none me-[14px] w-[75px] h-[75px] md:w-[141px] md:h-[141px] lg:mx-16">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 141 141" fill="none">
                <path d="M88.125 17.625H118.969V26.4375H88.125V17.625ZM88.125 44.0625H132.188V52.875H88.125V44.0625ZM88.125 70.5H118.969V79.3125H88.125V70.5ZM52.875 101.344C52.875 104.85 51.4823 108.212 49.0033 110.691C46.5243 113.17 43.1621 114.562 39.6562 114.562C36.1504 114.562 32.7882 113.17 30.3092 110.691C27.8302 108.212 26.4375 104.85 26.4375 101.344H52.875Z" fill="#86A169" />
                <path d="M132.187 96.9375H70.1475C69.2107 90.4733 66.2489 84.4724 61.6875 79.7972V30.8438C61.6875 25.0007 59.3664 19.397 55.2347 15.2653C51.103 11.1336 45.4993 8.8125 39.6562 8.8125C33.8132 8.8125 28.2095 11.1336 24.0778 15.2653C19.9461 19.397 17.625 25.0007 17.625 30.8438V79.7972C14.2166 83.2752 11.6809 87.5114 10.2255 92.1585C8.77017 96.8056 8.43666 101.731 9.2523 106.532C10.0679 111.333 12.0095 115.873 14.918 119.778C17.8264 123.684 21.6189 126.845 25.9847 129.002C30.3505 131.159 35.1653 132.252 40.0345 132.189C44.9038 132.126 49.689 130.911 53.9979 128.642C58.3068 126.374 62.0168 123.116 64.824 119.137C67.6311 115.158 69.4555 110.57 70.1475 105.75H132.187V96.9375ZM39.6562 123.375C35.196 123.381 30.8391 122.032 27.1633 119.506C23.4875 116.979 20.6664 113.395 19.074 109.229C17.4816 105.063 17.1932 100.511 18.247 96.1767C19.3008 91.8427 21.6471 87.9314 24.9746 84.9613L26.4375 83.6438V30.8438C26.4375 27.3379 27.8302 23.9757 30.3092 21.4967C32.7882 19.0177 36.1504 17.625 39.6562 17.625C43.1621 17.625 46.5243 19.0177 49.0033 21.4967C51.4823 23.9757 52.875 27.3379 52.875 30.8438V83.6438L54.3379 84.9613C57.6654 87.9314 60.0117 91.8427 61.0655 96.1767C62.1193 100.511 61.8309 105.063 60.2385 109.229C58.6461 113.395 55.825 116.979 52.1492 119.506C48.4734 122.032 44.1165 123.381 39.6562 123.375Z" fill="#416D14" fill-opacity="0.56" />
            </svg>
        </div>
        <div class="flex-col flex-1 md:flex md:flex-row justify-between lg:px-11">
            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>
        </div>
    </div>
    <!--Close Item-->

    <!--Item-->
    <div class="flex items-center bg-slate-200 ps-[13px] pe-[15px] py-6 rounded-[20px] mt-7 md:mt-7 md:flex">
        <div class="flex-none me-[14px] w-[75px] h-[75px] md:w-[141px] md:h-[141px] lg:mx-16">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 141 141" fill="none">
                <path d="M88.125 17.625H118.969V26.4375H88.125V17.625ZM88.125 44.0625H132.188V52.875H88.125V44.0625ZM88.125 70.5H118.969V79.3125H88.125V70.5ZM52.875 101.344C52.875 104.85 51.4823 108.212 49.0033 110.691C46.5243 113.17 43.1621 114.562 39.6562 114.562C36.1504 114.562 32.7882 113.17 30.3092 110.691C27.8302 108.212 26.4375 104.85 26.4375 101.344H52.875Z" fill="#86A169" />
                <path d="M132.187 96.9375H70.1475C69.2107 90.4733 66.2489 84.4724 61.6875 79.7972V30.8438C61.6875 25.0007 59.3664 19.397 55.2347 15.2653C51.103 11.1336 45.4993 8.8125 39.6562 8.8125C33.8132 8.8125 28.2095 11.1336 24.0778 15.2653C19.9461 19.397 17.625 25.0007 17.625 30.8438V79.7972C14.2166 83.2752 11.6809 87.5114 10.2255 92.1585C8.77017 96.8056 8.43666 101.731 9.2523 106.532C10.0679 111.333 12.0095 115.873 14.918 119.778C17.8264 123.684 21.6189 126.845 25.9847 129.002C30.3505 131.159 35.1653 132.252 40.0345 132.189C44.9038 132.126 49.689 130.911 53.9979 128.642C58.3068 126.374 62.0168 123.116 64.824 119.137C67.6311 115.158 69.4555 110.57 70.1475 105.75H132.187V96.9375ZM39.6562 123.375C35.196 123.381 30.8391 122.032 27.1633 119.506C23.4875 116.979 20.6664 113.395 19.074 109.229C17.4816 105.063 17.1932 100.511 18.247 96.1767C19.3008 91.8427 21.6471 87.9314 24.9746 84.9613L26.4375 83.6438V30.8438C26.4375 27.3379 27.8302 23.9757 30.3092 21.4967C32.7882 19.0177 36.1504 17.625 39.6562 17.625C43.1621 17.625 46.5243 19.0177 49.0033 21.4967C51.4823 23.9757 52.875 27.3379 52.875 30.8438V83.6438L54.3379 84.9613C57.6654 87.9314 60.0117 91.8427 61.0655 96.1767C62.1193 100.511 61.8309 105.063 60.2385 109.229C58.6461 113.395 55.825 116.979 52.1492 119.506C48.4734 122.032 44.1165 123.381 39.6562 123.375Z" fill="#416D14" fill-opacity="0.56" />
            </svg>
        </div>
        <div class="flex-col flex-1 md:flex md:flex-row justify-between lg:px-11">
            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>
        </div>
    </div>
    <!--Close Item-->

    <!--Item-->
    <div class="flex items-center bg-slate-200 ps-[13px] pe-[15px] py-6 rounded-[20px] mt-7 md:mt-7 md:flex">
        <div class="flex-none me-[14px] w-[75px] h-[75px] md:w-[141px] md:h-[141px] lg:mx-16">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 141 141" fill="none">
                <path d="M88.125 17.625H118.969V26.4375H88.125V17.625ZM88.125 44.0625H132.188V52.875H88.125V44.0625ZM88.125 70.5H118.969V79.3125H88.125V70.5ZM52.875 101.344C52.875 104.85 51.4823 108.212 49.0033 110.691C46.5243 113.17 43.1621 114.562 39.6562 114.562C36.1504 114.562 32.7882 113.17 30.3092 110.691C27.8302 108.212 26.4375 104.85 26.4375 101.344H52.875Z" fill="#86A169" />
                <path d="M132.187 96.9375H70.1475C69.2107 90.4733 66.2489 84.4724 61.6875 79.7972V30.8438C61.6875 25.0007 59.3664 19.397 55.2347 15.2653C51.103 11.1336 45.4993 8.8125 39.6562 8.8125C33.8132 8.8125 28.2095 11.1336 24.0778 15.2653C19.9461 19.397 17.625 25.0007 17.625 30.8438V79.7972C14.2166 83.2752 11.6809 87.5114 10.2255 92.1585C8.77017 96.8056 8.43666 101.731 9.2523 106.532C10.0679 111.333 12.0095 115.873 14.918 119.778C17.8264 123.684 21.6189 126.845 25.9847 129.002C30.3505 131.159 35.1653 132.252 40.0345 132.189C44.9038 132.126 49.689 130.911 53.9979 128.642C58.3068 126.374 62.0168 123.116 64.824 119.137C67.6311 115.158 69.4555 110.57 70.1475 105.75H132.187V96.9375ZM39.6562 123.375C35.196 123.381 30.8391 122.032 27.1633 119.506C23.4875 116.979 20.6664 113.395 19.074 109.229C17.4816 105.063 17.1932 100.511 18.247 96.1767C19.3008 91.8427 21.6471 87.9314 24.9746 84.9613L26.4375 83.6438V30.8438C26.4375 27.3379 27.8302 23.9757 30.3092 21.4967C32.7882 19.0177 36.1504 17.625 39.6562 17.625C43.1621 17.625 46.5243 19.0177 49.0033 21.4967C51.4823 23.9757 52.875 27.3379 52.875 30.8438V83.6438L54.3379 84.9613C57.6654 87.9314 60.0117 91.8427 61.0655 96.1767C62.1193 100.511 61.8309 105.063 60.2385 109.229C58.6461 113.395 55.825 116.979 52.1492 119.506C48.4734 122.032 44.1165 123.381 39.6562 123.375Z" fill="#416D14" fill-opacity="0.56" />
            </svg>
        </div>
        <div class="flex-col flex-1 md:flex md:flex-row justify-between lg:px-11">
            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>
        </div>
    </div>
    <!--Close Item-->

    <!--Item-->
    <div class="flex items-center bg-slate-200 ps-[13px] pe-[15px] py-6 rounded-[20px] mt-7 md:mt-7 md:flex">
        <div class="flex-none me-[14px] w-[75px] h-[75px] md:w-[141px] md:h-[141px] lg:mx-16">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 141 141" fill="none">
                <path d="M88.125 17.625H118.969V26.4375H88.125V17.625ZM88.125 44.0625H132.188V52.875H88.125V44.0625ZM88.125 70.5H118.969V79.3125H88.125V70.5ZM52.875 101.344C52.875 104.85 51.4823 108.212 49.0033 110.691C46.5243 113.17 43.1621 114.562 39.6562 114.562C36.1504 114.562 32.7882 113.17 30.3092 110.691C27.8302 108.212 26.4375 104.85 26.4375 101.344H52.875Z" fill="#86A169" />
                <path d="M132.187 96.9375H70.1475C69.2107 90.4733 66.2489 84.4724 61.6875 79.7972V30.8438C61.6875 25.0007 59.3664 19.397 55.2347 15.2653C51.103 11.1336 45.4993 8.8125 39.6562 8.8125C33.8132 8.8125 28.2095 11.1336 24.0778 15.2653C19.9461 19.397 17.625 25.0007 17.625 30.8438V79.7972C14.2166 83.2752 11.6809 87.5114 10.2255 92.1585C8.77017 96.8056 8.43666 101.731 9.2523 106.532C10.0679 111.333 12.0095 115.873 14.918 119.778C17.8264 123.684 21.6189 126.845 25.9847 129.002C30.3505 131.159 35.1653 132.252 40.0345 132.189C44.9038 132.126 49.689 130.911 53.9979 128.642C58.3068 126.374 62.0168 123.116 64.824 119.137C67.6311 115.158 69.4555 110.57 70.1475 105.75H132.187V96.9375ZM39.6562 123.375C35.196 123.381 30.8391 122.032 27.1633 119.506C23.4875 116.979 20.6664 113.395 19.074 109.229C17.4816 105.063 17.1932 100.511 18.247 96.1767C19.3008 91.8427 21.6471 87.9314 24.9746 84.9613L26.4375 83.6438V30.8438C26.4375 27.3379 27.8302 23.9757 30.3092 21.4967C32.7882 19.0177 36.1504 17.625 39.6562 17.625C43.1621 17.625 46.5243 19.0177 49.0033 21.4967C51.4823 23.9757 52.875 27.3379 52.875 30.8438V83.6438L54.3379 84.9613C57.6654 87.9314 60.0117 91.8427 61.0655 96.1767C62.1193 100.511 61.8309 105.063 60.2385 109.229C58.6461 113.395 55.825 116.979 52.1492 119.506C48.4734 122.032 44.1165 123.381 39.6562 123.375Z" fill="#416D14" fill-opacity="0.56" />
            </svg>
        </div>
        <div class="flex-col flex-1 md:flex md:flex-row justify-between lg:px-11">
            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>
        </div>
    </div>
    <!--Close Item-->

    <!--Item-->
    <div class="flex items-center bg-slate-200 ps-[13px] pe-[15px] py-6 rounded-[20px] mt-7 md:mt-7 md:flex">
        <div class="flex-none me-[14px] w-[75px] h-[75px] md:w-[141px] md:h-[141px] lg:mx-16">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 141 141" fill="none">
                <path d="M88.125 17.625H118.969V26.4375H88.125V17.625ZM88.125 44.0625H132.188V52.875H88.125V44.0625ZM88.125 70.5H118.969V79.3125H88.125V70.5ZM52.875 101.344C52.875 104.85 51.4823 108.212 49.0033 110.691C46.5243 113.17 43.1621 114.562 39.6562 114.562C36.1504 114.562 32.7882 113.17 30.3092 110.691C27.8302 108.212 26.4375 104.85 26.4375 101.344H52.875Z" fill="#86A169" />
                <path d="M132.187 96.9375H70.1475C69.2107 90.4733 66.2489 84.4724 61.6875 79.7972V30.8438C61.6875 25.0007 59.3664 19.397 55.2347 15.2653C51.103 11.1336 45.4993 8.8125 39.6562 8.8125C33.8132 8.8125 28.2095 11.1336 24.0778 15.2653C19.9461 19.397 17.625 25.0007 17.625 30.8438V79.7972C14.2166 83.2752 11.6809 87.5114 10.2255 92.1585C8.77017 96.8056 8.43666 101.731 9.2523 106.532C10.0679 111.333 12.0095 115.873 14.918 119.778C17.8264 123.684 21.6189 126.845 25.9847 129.002C30.3505 131.159 35.1653 132.252 40.0345 132.189C44.9038 132.126 49.689 130.911 53.9979 128.642C58.3068 126.374 62.0168 123.116 64.824 119.137C67.6311 115.158 69.4555 110.57 70.1475 105.75H132.187V96.9375ZM39.6562 123.375C35.196 123.381 30.8391 122.032 27.1633 119.506C23.4875 116.979 20.6664 113.395 19.074 109.229C17.4816 105.063 17.1932 100.511 18.247 96.1767C19.3008 91.8427 21.6471 87.9314 24.9746 84.9613L26.4375 83.6438V30.8438C26.4375 27.3379 27.8302 23.9757 30.3092 21.4967C32.7882 19.0177 36.1504 17.625 39.6562 17.625C43.1621 17.625 46.5243 19.0177 49.0033 21.4967C51.4823 23.9757 52.875 27.3379 52.875 30.8438V83.6438L54.3379 84.9613C57.6654 87.9314 60.0117 91.8427 61.0655 96.1767C62.1193 100.511 61.8309 105.063 60.2385 109.229C58.6461 113.395 55.825 116.979 52.1492 119.506C48.4734 122.032 44.1165 123.381 39.6562 123.375Z" fill="#416D14" fill-opacity="0.56" />
            </svg>
        </div>
        <div class="flex-col flex-1 md:flex md:flex-row justify-between lg:px-11">
            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>

            <div class="flex items-center justify-between md:flex-col">
                <div class="flex items-center justify-start">
                    <p class="font-medium md:text-xl md:mb-6">Suhu saat ini</p>
                </div>
                <div class="flex items-center justify-end md:justify-center bg-white md:rounded-xl md:w-[108px] md:h-[52px]">
                    <p class="font-medium text-[13px] md:text-[22px] text-[#416D14]">27*</p>
                </div>
            </div>
        </div>
    </div>
    <!--Close Item-->
</div>

@endsection